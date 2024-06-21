<?php

namespace App\Http\Requests\user\client\order;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class DetailsOrderClientRequest extends FormRequest
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
            'video_count' => 'required|integer|min:1',
            'video_option_type' => 'required',
            'video_option_duration' => 'required',
            'video_option_aspect' => 'required',
        ];
    }
}
