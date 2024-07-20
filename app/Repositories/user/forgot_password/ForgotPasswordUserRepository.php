<?php namespace App\Repositories\user\forgot_password;


use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ResetPassword;
class ForgotPasswordUserRepository implements ForgotPasswordUserInterface
{
    public function showForgetPasswordForm():array
    {

        return [];
    }
    public function submitForgetPasswordForm($request):array
    {
        $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);
        Mail::to($request->email)->send(new ResetPassword($token));
        $data=array(
            'email' =>$request->email
        );
        return $data;
    }
    public function showResetPasswordForm($token):array
    {
        $resetPassword=DB::table('password_resets')->where(['token' => $token])->first();
        if(!$resetPassword){
            toastr()->error(__('messages.url_not_valid'),__('messages.error'));
        }

        $data=array(
            'token' => $token,
            'status' =>$resetPassword?true:false,
            'email' => isset($resetPassword->email)?$resetPassword->email:null
        );
        return $data;
    }
    public function submitResetPasswordForm($request):bool
    {
        DB::beginTransaction();
        try {
            $resetPassword=DB::table('password_resets')->where(['token' => $request->key,'email' => $request->email])->first();
            if(!$resetPassword){
                toastr()->error(__('messages.url_not_valid'),__('messages.error'));
            }
            $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

            DB::table('password_resets')->where(['email'=> $request->email])->delete();
            DB::commit();
            toastr()->success(__('messages.Updated_successfully'),__('messages.successOperation'));
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage(),__('messages.error'));
            return false;
        }
    }

}
