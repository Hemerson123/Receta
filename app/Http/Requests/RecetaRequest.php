<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecetaRequest extends FormRequest
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

            'nombre'=> ['required','max:150'],
            'ingredientes'=> ['required','max:5000'],
            'preparacion'=> ['required','max:10000'],
            'enlace_video'=> ['required','max:150'],
            'imagen'=> 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ];
    }
}
