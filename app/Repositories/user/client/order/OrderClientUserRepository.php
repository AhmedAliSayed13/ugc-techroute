<?php namespace App\Repositories\user\client\order;

use App\Models\Country;
use App\Models\MainOption;
use App\Models\Order;
use App\Models\OrderVideo;
use App\Models\OrderVideoOption;
use App\Models\User;
use App\Models\VideoOptionAspect;
use App\Models\VideoOptionDuration;
use App\Models\VideoOptionType;
use Auth;
use Illuminate\Support\Facades\DB;
use Stripe\Charge;
use Stripe\Stripe;

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
        $orderPrice = $this->calculationPrice($request);
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'video_count' => $request->video_count,
            'video_option_type_id' => $request->video_option_type,
            'video_option_duration_id' => $request->video_option_duration,
            'video_option_aspect_id' => $request->video_option_aspect,
            'video_price' => $this->getVideoPrice($orderPrice['videoPrice']),
            'total' => $orderPrice['total'],
            'status' => 1,
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return $order->key;
    }

    public function showCheckout($key): array
    {
        $order = Order::where('key', $key)->first();
        $data = array(
            'key' => $key,
            'order' => $order,
        );
        return $data;
    }
    public function checkout($request, $key)
    {
        try {
            Stripe::setApiKey(config('services.stripe.secret'));
            $order = Order::where('key', $key)->first();

            $charge = Charge::create([
                'amount' => $order->total * 100,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Order #' . $key,
            ]);

            $order->status = 2;
            $order->paid = 1;
            $order->save();
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
            return $key;
        } catch (\Exception $e) {
            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
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
    public function showProduct($key): array
    {
        $order = Order::where('key', $key)->first();

        $data = array(
            'key' => $key,
            'order' => $order,
        );
        return $data;
    }
    public function product($request, $key)
    {
        try {

            $order = Order::where('key', $key)->first();

            $order->product_name = $request->product_name;
            $order->product_link = $request->product_link;
            $order->product_instructions = $request->product_instructions;
            $order->product_description = $request->product_description;
            $order->status = 3;
            $order->shipping = $request->shipping?1:0;
            $order->save();
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
            return $key;
        } catch (\Exception $e) {
            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
    }
    public function showCriteria($key): array
    {
        $countries = Country::all();
        $order = Order::where('key', $key)->first();
        $main_options = MainOption::where('is_active', 1)->get();
        $data = array(
            'key' => $key,
            'video_count' => $order->video_count,
            'order' => $order,
            'countries' => $countries,
            'mainOptions' => $main_options,
        );
        return $data;
    }
    public function criteria($request, $key)
    {
        DB::beginTransaction();
        try {

            $order = Order::where('key', $key)->first();
            $order_id = $order->id;

            $order->gender = $request->gender;
            $order->country_id = $request->country_id;
            $order->status = 4;
            $order->save();

            foreach ($request->scenes as $i => $scene) {
                OrderVideo::create(
                    [
                        'order_id' => $order_id,
                        'scenes' => $request->scenes[$i],
                        'mentions' => $request->mentions[$i],
                        'sub_key' => $key . '-' . $i,
                    ]
                );
            }

            foreach ($request->mainOptions as $i => $mainOptionId) {
                $valueOptions = implode(',', $request->valueOptions[$mainOptionId]);
                OrderVideoOption::create(
                    [
                        'main_option_id' => $mainOptionId,
                        'value_options' => $valueOptions,
                        'order_id' => $order_id,

                    ]
                );
            }

            DB::commit();
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
            return $key;
        } catch (\Exception $e) {

            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
    }
    public function getVideoPrice($price)
    {
        $percentageVideoPrice = getSettingValueByKey('percentage_video_price') / 100;
        return $price * $percentageVideoPrice;
    }
}
