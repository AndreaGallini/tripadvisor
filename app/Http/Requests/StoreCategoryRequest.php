<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|unique:category|min:3|max:150',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome della categoria è obbligatorio',
            'name.unique:category' => 'Questa categoria è già esistente',
            'name.min' => 'Il nome della categoria deve contenere almeno 3 caratteri',
            'name.max' => 'Il nome della categoria deve contenere al massimo 150 caratteri'
        ];
    }
}
