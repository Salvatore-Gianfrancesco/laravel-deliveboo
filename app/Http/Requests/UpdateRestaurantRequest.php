<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
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
            'company_name' => 'required|max:100',
            'description' => 'nullable|max:10000',
            'types' => 'required',
            'address' => 'required|max:255',
            'piva' => 'required|digits:11',
            'image' => 'nullable|image',
            'min_order' => 'nullable|numeric|between:0,999',
            'delivery' => 'nullable|numeric|between:0,999',
            'closing_time' => 'nullable|date_format:"H:i:s"'
        ];
    }
    public function messages()
    {
        return [
            'company_name.required' => 'Il nome del ristorante è obbligatorio',
            'company_name.max' => 'Il nome del ristorante deve essere di massimo :max caratteri',
            'description.max' => 'La descrizione deve essere di massimo :max caratteri',
            'types.required' => 'Il tipo della cucina del ristorante è obbligatorio',
            'address.required' => 'L\'indirizzo è obbligatorio',
            'address.max' => 'L\'indirizzo deve essere di massimo :max caratteri',
            'piva.required' => 'La partita IVA è obbligatoria',
            'piva.digits' => 'La partita IVA deve essere di :digits caratteri numerici',
            'image' => 'L\'immagine inserita non è nel formato corretto',
            'min_order.numeric' => 'L\'ordine minimo deve essere un valore numerico',
            'min_order.between' => 'L\'ordine minimo deve essere compreso tra 0 e 999',
            'delivery.numeric' => 'Il costo della consegna deve essere un valore numerico',
            'delivery.between' => 'Il costo della consegna deve essere compreso tra 0 e 999',
            'closing_time.date_format' => 'L\'orario di chiusura deve essere in formato hh:mm:ss'
        ];
    }
}
