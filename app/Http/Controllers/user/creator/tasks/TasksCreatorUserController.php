<?php

namespace App\Http\Controllers\user\creator\tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\creator\tasks\DeliveryVideosCreatorRequest;
use App\Repositories\user\creator\tasks\TasksCreatorUserInterface;

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
    public function edit($id)
    {
        $data = $this->tasksCreatorUserInterface->edit($id);
        return view($this->path . 'edit', compact('data'));
    }
    public function update(DeliveryVideosCreatorRequest $request, $id)
    {
        $data = $this->tasksCreatorUserInterface->update($request, $id);
        // return $data;
        return back();
    }

}
