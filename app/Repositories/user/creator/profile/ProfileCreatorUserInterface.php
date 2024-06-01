<?php namespace App\Repositories\user\creator\profile;



interface ProfileCreatorUserInterface {

    public function showProfile():array;
    public function profile($request);
    public function showChangePassword():array;
    public function changePassword($request);

}
