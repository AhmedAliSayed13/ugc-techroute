<?php namespace App\Repositories\user\creator\tasks;

use App\Models\Order;
use App\Models\Task;
use App\Models\Whitelist;
use App\Helpers\FileManager;
use App\Helpers\FilePublicManager;
use Illuminate\Support\Facades\Auth;
class TasksCreatorUserRepository implements TasksCreatorUserInterface
{

    public function index(): array
    {
        $tasks = Task::where(['creator_id' => auth()->user()->id])->orderby('created_at', Request()->sort ?? 'desc')->paginate(Request()->limit ?? 10);
        $data = array(
            'tasks' => $tasks,
        );
        return $data;
    }
    public function show($id): array
    {
        $task = Task::find($id);
        // $order = $task->order;
        $data = array(
            'task' => $task,
            'order' => $task->order,
        );
        return $data;
    }

    public function edit($id):array
    {
        $task = Task::find($id);
        $data = array(
            'task' => $task,
            'order' => $task->order,
        );
        // toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return $data;
    }
    public function update($request, $id)
    {
        $task = Task::find($id);
        if($task->creatorAllowedUpdate()){
            $filePublicManager = new FileManager('public');
            $folder = 'orders/order'. $task->order_id.'/tasks' . $task->id;
            $videoPath = $filePublicManager->updateFile($task->video,$request->file('video'), $folder);
            $task->video=$videoPath;
            $task->task_status_id = 2;
            $task->save();
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        }else{
            toastr()->error(__('messages.error'), __('messages.notAllowedOnCurrentStatus'));

        }
        return true;
    }
}
