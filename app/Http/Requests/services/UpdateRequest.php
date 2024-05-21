<?php

namespace App\Http\Requests\services;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'unm' => 'required',
            'psw' => 'required',
            'clb' => 'required',
            'name' => 'required',
            'unm_ma' => 'required',
            'psw_ma' => 'required',
            'clb_ma' => 'required',
            'sdp_username' => 'required',
            'sdp_password' => 'required',
            'sdp_club' => 'required'
        ];

    }
}
