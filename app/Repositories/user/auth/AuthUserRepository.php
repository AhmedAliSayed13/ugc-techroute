<?php namespace App\Repositories\user\auth;

use App\Models\MainOption;
use App\Models\User;
use Auth;
use App\Models\FeatureVideo;
use App\Models\CreatorOption;
use App\Helpers\FileManager;
use App\Helpers\FilePublicManager;
use Illuminate\Support\Facades\DB;
class AuthUserRepository implements AuthUserInterface
{
    public function ShowLogin()
    {

        return [];
    }
    public function login($request): bool
    {
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return true;
        }

        return false;

    }
    public function logout($request): bool
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return true;

    }
    public function verifyEmail($token): bool
    {
        $user = User::where('is_creator', 0)->where('email_verified_token', $token)->first();
        if ($user) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->email_verified_token = null;
            $user->save();
            toastr()->success(__('messages.successfully'), __('messages.yourAccountVerified'));
            return true;
        } else {
            toastr()->error(__('messages.error'), __('messages.token_not_valid'));
            return false;
        }

    }
    public function verify(): array
    {
        return [];
    }
    public function registerFormCreator($token): array
    {
        $mainOptions = MainOption::where('is_active', 1)->get();
        $user = User::where('is_creator', 1)->where('email_verified_token', $token)->first();
       if($user){
           $data = array(
               'user' => $user,
               'mainOptions' => $mainOptions,
            );
            return $data;
        }else{
            toastr()->error(__('messages.token_expired'), __('messages.error'));
            return [];
        }
    }
    public function registerFormCreatorSave($request, $token): bool
    {
        DB::beginTransaction();
        try {


        $user = User::where('is_creator', 1)->where('is_active',0)->where('email_verified_token', $token)->first();
        $filePublicManager = new FileManager('public');
        $folder = 'feature_videos/user-' . $user->id;
        foreach($request->file('videos') as $video){
            $videoPath = $filePublicManager->uploadFile($video, $folder);
            $featureVideo = FeatureVideo::create([
                    'user_id' => $user->id,
                    'path' => $videoPath,
            ]);
        }
        foreach($request->mainOptions as $key => $mainOptionId){
            $valueOptions = implode(',', $request->valueOptions[$mainOptionId]);
            CreatorOption::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'main_option_id' => $mainOptionId,
                ],
                [
                    'value_options' => $valueOptions,
                ]
            );
        }
        $user->email_verified_token=null;
        $user->email_verified_at=date('Y-m-d H:i:s');
        $user->save();


        DB::commit();

            return true;
        } catch (\Exception $e) {

            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
    }
    public function registerComplete(): array
    {
        return [];
    }
}
