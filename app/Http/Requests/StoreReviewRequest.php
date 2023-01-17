<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'title' =>'required|min:5|max:30',
            'text_review' =>'required|min:10|max:200'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
            'title.max' => 'Il titolo deve essere lungo massimo :max caratteri.',
            'text_review.required' => 'Il titolo è obbligatorio',
            'text_review.min' => 'Il testo deve essere lungo almeno :min caratteri.',
            'text_review.max' => 'Il testo deve essere lungo massimo :max caratteri.',

        ];
    }
}
