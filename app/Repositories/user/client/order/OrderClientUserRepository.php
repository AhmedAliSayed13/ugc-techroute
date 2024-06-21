<?php namespace App\Repositories\user\client\order;

use App\Models\Order;
use App\Models\User;
use App\Models\VideoOptionAspect;
use App\Models\VideoOptionDuration;
use App\Models\VideoOptionType;
use Auth;

class OrderClientUserRepository implements OrderClientUserInterface
{

    public function showDetails(): array
    {
        $videoTypes = VideoOptionType::where('is_active', 1)->orderBy('price')->get();
        $videoDurations = VideoOptionDuration::where('is_active', 1)->get();
        $videoAspects = VideoOptionAspect::where('is_active', 1)->get();
        $data = array(
            'videoTypes' => $videoTypes,
            'videoDurations' => $videoDurations,
            'videoAspects' => $videoAspects,
        );
        return $data;
    }
    public function details($request)
    {
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'video_count' => $request->video_count,
            'video_option_type_id' => $request->video_option_type,
            'video_option_duration_id' => $request->video_option_duration,
            'video_option_aspect_id' => $request->video_option_aspect,
            'video_price' => $request->video_price,
            'total' => $request->total,
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return $order->key;
    }

    public function showCheckout($key): array
    {
        $videoTypes = VideoOptionType::where('is_active', 1)->get();
        $videoDurations = VideoOptionDuration::where('is_active', 1)->get();
        $videoAspects = VideoOptionAspect::where('is_active', 1)->get();
        $data = array(
            'videoTypes' => $videoTypes,
            'videoDurations' => $videoDurations,
            'videoAspects' => $videoAspects,
        );
        return $data;
    }
    public function checkout($request, $key)
    {
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'video_count' => $request->video_count,
            'video_option_type_id' => $request->video_option_type,
            'video_option_duration_id' => $request->video_option_duration,
            'video_option_aspect_id' => $request->video_option_aspect,
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }
    public function calculationPrice($request)
    {
        try {
            $videoCount = $request->video_count;
            $price = 0;
            $videoTypes = VideoOptionType::find($request->video_option_type);
            $price = $price + $videoTypes->price;
            $videoDuration = VideoOptionDuration::find($request->video_option_duration);
            $price = $price + $videoDuration->price;
            $videoAspect = VideoOptionAspect::find($request->video_option_aspect);
            $price = $price + $videoAspect->price;
            return [
                'videoCount' => $videoCount,
                'videoPrice' => $price,
                'total' => $price * $videoCount,
            ];
        } catch (\Throwable $th) {
            return false;
        }

    }

}
