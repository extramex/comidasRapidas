<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class recetaGuardarRequest extends FormRequest
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
            //
            'nombre'=> 'required|min:1|max:100',            
            'descripcion'=> 'required',
        ];
    }
    public function messages(){
        return[
            'nombre.required'=> 'El nombre es requerido',
            'nombre.min'=> 'El nombre debe tener como minimo 1 caracter',
            'nombre.max'=> 'El nombre debe tener como maximo 100 caracteres',            
            'descripcion.required'=> 'La descripción es requerida',
        ];
    }
}
