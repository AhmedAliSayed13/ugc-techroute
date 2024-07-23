<?php namespace App\Repositories\user\creator\profile;



interface ProfileCreatorUserInterface {

    public function showProfile():array;
    public function profile($request);
    public function profileImg($request);
    public function showFeatureVideos():array;
    public function featureVideos($request);
    public function showChangePassword():array;
    public function changePassword($request);
    public function showOptions():array;
    public function options($request);
    public function deleteFeatureVideos($request ,$id):bool;

}
