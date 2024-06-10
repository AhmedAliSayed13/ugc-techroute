<?php

namespace App\Http\Controllers\user\creator\profile;

use App\Http\Controllers\Controller;
use App\Repositories\user\creator\profile\ProfileCreatorUserInterface;
use App\Http\Requests\user\creator\profile\ProfileCreatorRequest;
use App\Http\Requests\user\creator\profile\ChangePasswordCreatorRequest;
use App\Http\Requests\user\creator\profile\FeatureVideosCreatorRequest;
class ProfileCreatorUserController extends Controller
{
    protected $profileCreatorUserInterface;
    private $path = "user.creator.profile.";

    public function __construct(ProfileCreatorUserInterface $profileCreatorUserInterface)
    {
        $this->profileCreatorUserInterface = $profileCreatorUserInterface;
    }
    public function showProfile()
    {
        $data = $this->profileCreatorUserInterface->showProfile();
        return view($this->path . 'index', compact('data'));
    }
    public function profile(ProfileCreatorRequest $request)
    {
        $data = $this->profileCreatorUserInterface->profile($request);
        return back();
    }
    public function showFeatureVideos()
    {
        $data = $this->profileCreatorUserInterface->showFeatureVideos();
        return view($this->path . 'featureVideos', compact('data'));
    }
    public function featureVideos(FeatureVideosCreatorRequest $request)
    {
        $data = $this->profileCreatorUserInterface->featureVideos($request);
        return back();
    }
    public function showChangePassword()
    {
        $data = $this->profileCreatorUserInterface->showChangePassword();
        return view($this->path . 'changePassword', compact($data));
    }
    public function changePassword(ChangePasswordCreatorRequest $request)
    {
        $data = $this->profileCreatorUserInterface->changePassword($request);
        return back();
    }

}
