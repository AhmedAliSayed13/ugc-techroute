<?php

namespace App\Http\Requests\user\creator\sendRequest;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreRequest extends FormRequest
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
        $orderId = $this->route('id');
        return [
            'creator_id' => [
                'required',
                Rule::unique('order_requests')->where(function ($query) use ($orderId) {
                    return $query->where('order_id', $orderId);
                }),
            ],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'creator_id' => auth()->user()->id,
        ]);
    }
    public function messages()
    {
        return [
            'creator_id.unique' => 'This creator has already made a request for the given order.',
        ];
    }
}
