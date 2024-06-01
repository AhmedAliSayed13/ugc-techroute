<?php namespace App\Repositories\user\client\profile;

use App\Helpers\FilePublicManager;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class ProfileClientUserRepository implements ProfileClientUserInterface
{

    public function showProfile(): array
    {
        $data = array(
        );
        return $data;
    }
    public function profile($request)
    {
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
