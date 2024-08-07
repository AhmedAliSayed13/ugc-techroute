<?php

namespace App\Http\Requests\user\client\shipping;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateShippingClientRequest extends FormRequest
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
            'key' => 'required|string',
            'tracking' => 'required|string',
        ];
    }
}
