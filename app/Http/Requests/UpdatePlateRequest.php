<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePlateRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('plates')->ignore($this->plate->id),
                'max:100'
            ],
            'description' => 'nullable|max:10000',
            'price' => 'nullable|numeric|between:0,999',
            'visibility' => 'nullable',
            'image' => 'nullable|image'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome del piatto è obbligatorio',
            'name.max' => 'Il nome del piatto deve essere di massimo :max caratteri',
            'description.max' => 'La descrizione deve essere di massimo :max caratteri',
            'price.numeric' => 'Il prezzo deve essere un valore numerico',
            'price.between' => 'Il prezzo deve essere compreso tra 0 e 999',
            'image.image' => 'L\'immagine inserita non è nel formato corretto'
        ];
    }
}
