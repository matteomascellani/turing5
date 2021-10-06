<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMovie extends FormRequest
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
            'movie.title' => 'required',
            'movie.minutes' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'movie.title.required' => 'Il titolo è richiesto',
            'movie.minutes.required' => 'I minuti sono richiesti',
            'movie.minutes.integer' => 'I minuti devono essere un numero intero'
        ];
    }
}
