<?php namespace App\Repositories\user\creator\tasks;

use App\Models\Order;
use App\Models\Task;
use App\Models\Whitelist;

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
    public function requestSend($request, $id)
    {
        $order = Task::Create([
            'order_id' => $id,
            'creator_id' => auth()->user()->id,
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }
    public function whitelist($id)
    {
        $order = Order::find($id);
        if ($order->hasWhitelist()) {

            whitelist::where(['order_id' => $id, 'creator_id' => auth()->user()->id])->delete();

        } else {

            $order = Whitelist::Create([
                'order_id' => $id,
                'creator_id' => auth()->user()->id,
            ]);
        }
        // toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }

}
