<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'book.titolo'=>'required|max:191',
            'book.author'=>'required|max:191',
            'book.pages'=>'required|max:191'
        ];
    }
    public function messages()
    {
        return
        [
         'book.titolo.required'=>'il titolo è richiesto',
         'book.author.required'=>'autore richiesto',
         'book.pages.required'=>'numero di pagine obbligatorio'
        ];

    }
}
