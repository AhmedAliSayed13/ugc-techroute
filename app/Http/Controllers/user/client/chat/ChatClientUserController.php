<?php

namespace App\Http\Controllers\user\client\chat;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\chat\ChatClientUserInterface;
use Illuminate\Http\Request;
use App\Http\Requests\user\client\chats\ChooseCreatorMyorderClientRequest;
class ChatClientUserController extends Controller
{
    protected $chatClientUserInterface;
    private $path = "user.client.chat.";

    public function __construct(ChatClientUserInterface $chatClientUserInterface)
    {
        $this->chatClientUserInterface = $chatClientUserInterface;
    }

    public function index()
    {
        $data = $this->chatClientUserInterface->index();
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function show($id)
    {
        $data = $this->chatClientUserInterface->show($id);

        return view($this->path . 'show', compact('data'));
    }
    public function store(Request $request)
    {
        $data = $this->chatClientUserInterface->store($request);
        return back();
    }

}
