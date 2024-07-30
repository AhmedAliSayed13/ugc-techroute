<?php

namespace App\Http\Requests\user\client\order;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class CheckoutOrderClientRequest extends FormRequest
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
            'total' => 'required|numeric',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
                if ( Auth::user()->CanPayByWallet($this->total)) {
                    // $validator->errors()->add('wallet', 'رصيد المحفظة غير كافٍ لإتمام العملية.');
                    tostar(__('messages.error'), __('messages.not_enough_balance'));
                }

        });
    }


}
