<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'string|required',
            'director'  => 'string|required' ,
            'duration'  => 'required|integer|between:1,500', 
            'releaseDate'  => 'date|required',
            'imageUrl' => 'url',
            'genre' => 'string|required'
        ];
    }
}
