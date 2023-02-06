<?php

namespace App\Http\Requests;

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
            'name' => 'required|unique:plates,name|max:100',
            'description' => 'nullable|max:300'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo obbligatorio',
            'name.max' => 'Il nome deve essere di massimo :max caratteri',
            'description.max' => 'La descrizione deve essere di massimo :max caratteri',
        ];
    }
}
