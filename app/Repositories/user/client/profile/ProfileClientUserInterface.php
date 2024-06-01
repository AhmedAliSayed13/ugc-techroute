<?php namespace App\Repositories\user\client\profile;



interface ProfileClientUserInterface {

    public function showProfile():array;
    public function profile($request);
    public function showChangePassword():array;
    public function changePassword($request);

}
