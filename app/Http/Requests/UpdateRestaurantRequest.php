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
            'description' => 'nullable|max:300',
            'address' => 'nullable|max:300',
            'piva' => 'nullable|digits:11',
            'min_order' => 'nullable',
            'closing_time' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'company_name.required' => 'Campo obbligatorio',
            'company_name.max' => 'Il nome deve essere di massimo :max caratteri',
            'description.max' => 'La descrizione deve essere di massimo :max caratteri',
            'piva.digits' => 'La descrizione deve essere di :digits caratteri',
        ];
    }
}
