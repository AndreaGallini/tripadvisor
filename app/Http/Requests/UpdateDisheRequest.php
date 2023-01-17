<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDisheRequest extends FormRequest
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
            'name'=>['required','min:5','max:30'],
            'img'=>['required'],
            'price'=>['required'],
            'descrizione'=>['required','min:10','max:40'],
        ];
    }
            public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il nome deve essere lungo massimo :max caratteri.',
            'img.required' => 'Immagine obbligatoria',
            'price.required' => 'Prezzo obbligatorio',
            'descrizione.required' => 'Descrizione obbligatoria',
            'descrizione.min' => 'La descrizione deve essere lungo almeno :min caratteri.',
            'descrizione.max' => 'La descrizione deve essere lungo massimo :max caratteri.',



        ];
    }
}
