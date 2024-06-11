<?php namespace App\Repositories\user\client\order;

use App\Models\User;
use App\Models\VideoOptionType;
use App\Models\VideoOptionDuration;
use App\Models\VideoOptionAspect;
use Auth;

class OrderClientUserRepository implements OrderClientUserInterface
{

    public function showDetails(): array
    {
        $videoTypes=VideoOptionType::where('is_active',1)->get();
        $videoDurations=VideoOptionDuration::where('is_active',1)->get();
        $videoAspects=VideoOptionAspect::where('is_active',1)->get();
        $data = array(
            'videoTypes'=>$videoTypes,
            'videoDurations'=>$videoDurations,
            'videoAspects'=>$videoAspects,
        );
        return $data;
    }
    public function details($request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }

}
