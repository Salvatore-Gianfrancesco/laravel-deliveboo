<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'client_firstname' => 'nullable|max:100',
            'client_lastname' => 'nullable|max:100',
            'client_address' => 'nullable',
            'client_phone' => 'nullable|max:20',
            'total_amount' => 'nullable',
            'delivery_time' => 'nullable',
            'datetime' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'client_firstname.max' => 'Il nome può avere al massimo :max caratteri',
            'client_firstname.max' => 'Il cognome può avere al massimo :max caratteri',
            'client_phone.max' => 'Il numero di telefono può avere al massimo :max numeri'
        ];
    }
}
