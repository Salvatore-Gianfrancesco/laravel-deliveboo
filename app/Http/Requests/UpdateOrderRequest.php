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
            /* 'client_firstname' => 'required|max:100',
            'client_lastname' => 'required|max:100',
            'client_address' => 'required|max:255',
            'client_phone' => 'required|max:20',
            'total_amount' => 'required|numeric|between:0,999',
            'delivery_time' => 'required|date_format:"H:i:s"', */
            'id_delivered' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            /* 'client_firstname.required' => 'Il nome è obbligatorio',
            'client_firstname.max' => 'Il nome deve essere di massimo :max caratteri',
            'client_lastname.required' => 'Il cognome è obbligatorio',
            'client_lastname.max' => 'Il cognome deve essere di massimo :max caratteri',
            'client_address.required' => 'L\'indirizzo è obbligatorio',
            'client_address.max' => 'L\'indirizzo deve essere di massimo :max caratteri',
            'client_phone.required' => 'Il numero di telefono è obbligatorio',
            'client_phone.max' => 'Il numero di telefono deve essere di massimo :max caratteri',
            'total_amount.required' => 'Il prezzo è obbligatorio',
            'total_amount.numeric' => 'Il prezzo deve essere in formato numerico',
            'total_amount.between' => 'Il prezzo deve essere compreso tra 0 e 999',
            'delivery_time.required' => 'L\'orario di consegna è obbligatorio',
            'delivery_time.date_format' => 'L\'orario di consegna deve essere nel formato hh:mm:ss', */];
    }
}
