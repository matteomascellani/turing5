<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
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
            'music.name' => 'required|unique:posts|max:191',
            'music.composer' => 'required|max:191',
            'music.date' => 'requred|integer'
        ];
    }

    public function messages()
    {
        return [
            'music.name.required' => 'La musica è un campo obbligatorio',
            'music.name.max' => 'Numero caratteri superato',
            'music.composer.required' => 'Devi indicare il\'compositore',
            'music.date.required' => 'Campo data mancante',
            'music.date.integer' => 'La data può essere solo un numero intero'
        ];
    }
}
