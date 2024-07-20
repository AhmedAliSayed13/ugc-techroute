<?php namespace App\Repositories\user\client\features;

use App\Models\Task;
use Auth;

class FeaturesClientUserRepository implements FeaturesClientUserInterface
{

    public function videos(): array
    {
        $tasks = Task::where('client_id', Auth::user()->id)->where('task_status_id', 3)->get();
        $data = array(
            'tasks' => $tasks,
        );
        return $data;
    }
    public function creators(): array
    {
        $tasks = Task::where('client_id', Auth::user()->id)->where('task_status_id', 3)->get();
        $data = array(
            'tasks' => $tasks,
        );
        return $data;
    }

}
