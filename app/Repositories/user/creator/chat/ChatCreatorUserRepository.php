<?php namespace App\Repositories\user\creator\chat;

use App\Models\Task;
use Auth;

class ChatCreatorUserRepository implements ChatCreatorUserInterface
{

    public function index(): array
    {
        $tasks = Task::where(['creator_id' => Auth::user()->id])->orderBy('created_at', 'desc')->get();
        $data = array(
            'tasks' => $tasks,
            // 'messages'=>$tasks->messages
        );
        return $data;
    }

    public function show($id): array
    {
        $tasks = Task::where(['creator_id' => Auth::user()->id])->orderBy('created_at', 'desc')->get();
        $taskChat = Task::where('id', $id)->where('creator_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
        $data = array(
            'tasks' => $tasks,
            'taskChat' => $taskChat,
            'messages' => $taskChat->messages,
            'task_id'=>$id
        );
        return $data;
    }

}
