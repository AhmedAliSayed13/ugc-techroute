<?php

namespace App\Http\Controllers\user\client\profile;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\profile\ProfileClientUserInterface;

class ProfileClientUserController extends Controller
{
    protected $profileClientUserInterface;
    private $path = "user.client.profile.";

    public function __construct(ProfileClientUserInterface $profileClientUserInterface)
    {
        $this->profileClientUserInterface = $profileClientUserInterface;
    }
    // public function profile()
    // {
    //     $data = $this->profileClientUserInterface->profile();
    //     return view($this->path . 'index', compact($data));

    // }
    public function showProfile()
    {
        $data = $this->profileClientUserInterface->showProfile();
        return view($this->path . 'index', compact($data));
    }
    public function register(RegisterClientRequest $request)
    {
        $data = $this->profileClientUserInterface->register($request);
        if ($data) {
            return redirect()->route('client.profile');
        }
        return redirect()->route('client.register');

    }

}
