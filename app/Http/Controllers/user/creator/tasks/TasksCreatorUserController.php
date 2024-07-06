<?php

namespace App\Http\Controllers\user\creator\tasks;

use App\Http\Controllers\Controller;
use App\Repositories\user\creator\tasks\TasksCreatorUserInterface;
use App\Http\Requests\user\creator\sendRequest\StoreRequest;
class TasksCreatorUserController extends Controller
{
    protected $tasksCreatorUserInterface;
    private $path = "user.creator.tasks.";

    public function __construct(TasksCreatorUserInterface $tasksCreatorUserInterface)
    {
        $this->tasksCreatorUserInterface = $tasksCreatorUserInterface;
    }
    public function index()
    {
        $data = $this->tasksCreatorUserInterface->index();
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function show($id)
    {
        $data = $this->tasksCreatorUserInterface->show($id);
        // return $data;
        return view($this->path . 'show', compact('data'));
    }
    public function requestSend(StoreRequest $request,$id)
    {
            $data = $this->tasksCreatorUserInterface->requestSend($request,$id);
            return back();
    }
    public function whitelist($id)
    {
            $data = $this->tasksCreatorUserInterface->whitelist($id);
            return back();
    }

}
