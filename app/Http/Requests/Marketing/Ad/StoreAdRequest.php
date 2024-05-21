<?php

namespace App\Http\Requests\Marketing\Ad;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use App\Models\Ad;
use Carbon\Carbon;
class StoreAdRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date'=> 'required|date',
            'details'=> 'required|string',
            // 'medias'=> 'required',
            'customer_id'=> 'required',
            'marketing_service_type_id'=> 'required',
            'time' => [
                'required',
                function ($attribute, $value, $fail) {
                    $lastAd = Ad::latest()->whereDate('date', $this->date)->where('marketing_service_type_id',$this->marketing_service_type_id)->first();
    
                    if ($lastAd && strtotime($this->time) - strtotime($lastAd->time) < 1800) {
                        $fail("The duration between {$attribute} of last ad  must be more than half an hour.");
                    }
                },
            ],
        ];
    }
    
}