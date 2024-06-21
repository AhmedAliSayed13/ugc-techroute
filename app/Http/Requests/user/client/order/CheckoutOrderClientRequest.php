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
            // 'card' => 'required|string',
            // 'cvc'  => 'required|string',
            // 'exp'  => 'required|string',
        ];
    }
}
