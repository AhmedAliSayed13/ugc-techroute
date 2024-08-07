<?php namespace App\Repositories\user\creator\dashboard;

use App\Models\Country;
use App\Models\CreatorInfo;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Task;
use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Str;
use Mail;
use Auth;
use App\Mail\SendReqisterFormCreator;
use CoreProc\WalletPlus\Models\WalletLedger;
class DashboardCreatorUserRepository implements DashboardCreatorUserInterface
{
    public function dashboard(): array
    {
        $data = array(
            'tasks_count' => Task::where('creator_id',Auth::user()->id)->count(),
            'tasks_complete_count' => Task::where('creator_id',Auth::user()->id)->where('task_status_id',3)->count(),
            'tasks_in_process_count' => Task::where('creator_id',Auth::user()->id)->whereIn('task_status_id',[1,2,4])->count(),
        );
        return $data;
    }
    public function ShowRegister(): array
    {
        $countries = Country::all();
        $data = array(
            'countries' => $countries,
        );
        return $data;
    }
    public function register($request)
    {
        DB::beginTransaction();
        try {
            $token= Str::random(60);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'is_creator' => 1,
                'is_active' => 0,
                'password' => Hash::make($request->password),
                'email_verified_token' => $token,
            ]);
            $user->wallets()->create();
            CreatorInfo::create([
                'user_id' => $user->id,
                'country_id' => $request->country_id,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
            ]);
            Mail::to($user->email)->send(new SendReqisterFormCreator($token, $user->name));

            DB::commit();
            return $user;
        } catch (\Exception $e) {
            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
    }
    public function registerWelcome(): array
    {

        $data = [];

        return $data;
    }
    public function showWallet(): array
    {
        $wallet=Auth::user()->wallets(1)->first();
        $transactions=Transaction::where('wallet_id',$wallet->id)->orderBy('id','desc')->paginate(10);
        $data = array(
            'wallet' => $wallet,
            'transactions' => $transactions,
        );
        return $data;
    }
    public function shippings(): array
    {
        $ordersIds = Order::where(['shipping' => 1])->where('status', '>', 4)->pluck('id');
        $tasks=Task::whereIn('order_id',$ordersIds)->where('creator_id',Auth::user()->id)->pluck('id');
        $shippings=Shipping::whereIn('task_id',$tasks)->where('active',1)->paginate(Request('limit') ? Request('limit') : 10);
        $data = array(
            'shippings' => $shippings
        );
        return $data;
    }
}
