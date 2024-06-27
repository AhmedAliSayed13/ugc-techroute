<?php

namespace App\Http\Requests\user\auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormCreatorRequest extends FormRequest
{
    public function authorize()
    {
        return true; // تأكد من تعيين هذا إلى true للسماح بالتحقق
    }

    public function rules()
    {
        $rules = [
            'mainOptions' => 'required|array|min:1',
            'mainOptions.*' => 'required|integer',
            'valueOptions' => 'required|array',
        ];

        foreach ($this->input('mainOptions', []) as $option) {
            $rules["valueOptions.{$option}"] = 'required|array|min:1';
            $rules["valueOptions.{$option}.*"] = 'required|string';
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'mainOptions.required' => 'يجب اختيار على الأقل خيار واحد في القائمة الرئيسية.',
            'mainOptions.*.required' => 'كل خيار في القائمة الرئيسية يجب أن يكون له قيمة محددة.',
            'valueOptions.required' => 'قائمة القيم مطلوبة.',
        ];

        foreach ($this->input('mainOptions', []) as $option) {
            $messages["valueOptions.{$option}.required"] = "يجب اختيار على الأقل خيار واحد من القائمة {$option}.";
            $messages["valueOptions.{$option}.min"] = "يجب اختيار على الأقل خيار واحد من القائمة {$option}.";
        }

        return $messages;
    }
}
