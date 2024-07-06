<?php

namespace App\Http\Requests\user\creator\tasks;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class DeliveryVideosCreatorRequest extends FormRequest
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
            'video' => 'required|mimes:mp4,mov,avi,wmv|max:20480',
        ];
    }

}
