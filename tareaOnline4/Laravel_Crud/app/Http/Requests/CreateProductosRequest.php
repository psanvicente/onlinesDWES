<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//lo he modificado de false, para poderlo utilizar
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {//modificado el array
        return ['seccion'=>'required','paisOrigen'=>'required','nombreArticulo'=>'required'
            //
        ];
    }
}
