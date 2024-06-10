<?php

namespace App\Http\Requests\user\creator\profile;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class FeatureVideosCreatorRequest extends FormRequest
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
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (count(Auth::user()->featureVideos) > 3) {
                $validator->errors()->add('video', 'تستطيع رفع ما يصل إلى 3 مقاطع فيديو.');
            }
        });
    }
}
