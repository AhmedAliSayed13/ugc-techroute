<?php namespace App\Repositories\user\creator\profile;

use App\Helpers\FileManager;
use App\Helpers\FilePublicManager;
use App\Models\Country;
use App\Models\FeatureVideo;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileCreatorUserRepository implements ProfileCreatorUserInterface
{

    public function showProfile(): array
    {
        $countries = Country::all();
        $data = array(
            'countries' => $countries,
        );
        return $data;
    }
    public function profile($request)
    {
        DB::beginTransaction();
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if ($request->hasFile('img')) {

            $filePublicManager = new FilePublicManager('system');
            $imageName = $filePublicManager->updateFile(Auth::user()->img, $request->file('img'), 'users/profiles');
            $user->img = $imageName;
        }
        $user->save();
        $profile = $user->CreatorInfo;
        $profile->country_id = $request->country_id;
        $profile->birthdate = $request->birthdate;
        $profile->gender = $request->gender;
        $profile->languages = implode(',', $request->languages);
        $profile->describe = $request->describe;

        $profile->save();
        DB::commit();
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }
    public function showFeatureVideos(): array
    {
        $featureVideos = Auth::user()->featureVideos;
        $data = array(
            'featureVideos' => $featureVideos,
        );
        return $data;
    }
    public function featureVideos($request)
    {
        $user = Auth::user();
        $filePublicManager = new FileManager('public');
        $folder = 'feature_videos/user-' . $user->id;
        $videoPath = $filePublicManager->uploadFile($request->file('video'), $folder);
        $featureVideo = FeatureVideo::create([
            'user_id' => $user->id,
            'path' => $videoPath,
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }
    public function showChangePassword(): array
    {
        $data = array(
        );
        return $data;
    }
    public function changePassword($request)
    {
        $user = Auth::user();

        $user->password = Hash::make($request->password);
        $user->save();
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }
}
