<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActivityRequest extends FormRequest
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
            'name' => ['required','min:5','max:30'],
            'adress'=>['required'],
            'img_cover' => ['required'],
            'phone_number'=>['required'],
            'website'=>['required'],
        ];
    }
        public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il nome deve essere lungo massimo :max caratteri.',
            'adress.required' => 'L\'indirizzo è obbligatorio',
            'img_cover.required' => 'L\'immagine di copertina è obbligatoria',
            'phone_number.required' => 'Il numero di telefono è obbligatorio',
            'website.required' => 'Il sito web è obbligatorio',



        ];
    }
}
