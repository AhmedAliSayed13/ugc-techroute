<?php

namespace App\Http\Controllers\user\client\profile;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\profile\ProfileClientUserInterface;
use App\Http\Requests\user\client\profile\ChangePasswordClientRequest;
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
    public function profile(ProfileClientRequest $request)
    {
        $data = $this->profileClientUserInterface->profile($request);
        return back();
    }
    public function showChangePassword()
    {
        $data = $this->profileClientUserInterface->showChangePassword();
        return view($this->path . 'changePassword', compact($data));
    }
    public function changePassword(ChangePasswordClientRequest $request)
    {
        $data = $this->profileClientUserInterface->changePassword($request);
        return back();
    }

}
