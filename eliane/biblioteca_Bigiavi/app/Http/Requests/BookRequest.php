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
            'book.category'=>'required|max:191',
            'book.author'=>'required|max:191',
            'book.stato'=>'required|max:191',
            'book.anno'=>'integer|min:1800|max:'.date("Y")
        ];
    }
    public function messages()
    {
        return [
            'book.titolo.required'=>'il campo titolo è obbligatorio',
            'book.category.required'=>'il campo category è obbligatorio',
            'book.author.required'=>'il campo author è obbligatorio',
            'book.stato.required'=>'il campo stato è obbligatorio',
            'book.anno.integer'=>'il campo anno è di 4 cifre',


        ];
    }
}
