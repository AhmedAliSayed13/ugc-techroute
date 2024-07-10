<?php

namespace App\Http\Controllers\user\creator\chat;

use App\Http\Controllers\Controller;
use App\Repositories\user\creator\chat\ChatCreatorUserInterface;
use Illuminate\Http\Request;
use App\Http\Requests\user\creator\chats\ChooseCreatorMyorderCreatorRequest;
class ChatCreatorUserController extends Controller
{
    protected $chatCreatorUserInterface;
    private $path = "user.creator.chat.";

    public function __construct(ChatCreatorUserInterface $chatCreatorUserInterface)
    {
        $this->chatCreatorUserInterface = $chatCreatorUserInterface;
    }

    public function index()
    {
        $data = $this->chatCreatorUserInterface->index();
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function show($id)
    {
        $data = $this->chatCreatorUserInterface->show($id);
        $task_id=8;
        return view($this->path . 'show', compact('data','task_id'));
    }

}
