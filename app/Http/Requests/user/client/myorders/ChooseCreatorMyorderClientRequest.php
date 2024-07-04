<?php

namespace App\Http\Requests\user\client\myorders;

use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\OrderRequest;
use App\Models\Order;
class ChooseCreatorMyorderClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => ['required', 'integer', Rule::in([0, 1])],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $orderRequestId = $this->route('id');
            $userId = auth()->id();
            $orderRequest = OrderRequest::find($orderRequestId);
            $order= $orderRequest->order;
            $countRequestAcceptBefore=OrderRequest::where('order_id', $orderRequest->order_id)->where('status', 1)->count();


            $orderRequestExists = $order->user_id == $userId;
            if (!$orderRequestExists) {
                toastr()->error(__('messages.error'), __('messages.maximum_number_of_choosed_creators_is_reached'));
                $validator->errors()->add('status', __('messages.order_request_not_exists'));
            }elseif($countRequestAcceptBefore>=$order->video_count){
                toastr()->error(__('messages.error'), __('messages.maximum_number_of_choosed_creators_is_reached'));
                $validator->errors()->add('status', __('messages.maximum_number_of_choosed_creators_is_reached'));
            }
        });
    }
}
