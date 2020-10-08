<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productoGuardarRequest extends FormRequest
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
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'bebidas'=> 'required',
            // 'id_receta' => 'confirmed', 
        ];
    }
    public function messages(){
        return[
            'nombre.required' => 'El nombre es requerido',
            'descripcion.required' => 'La descripción es requerida',
            'bebidas.required' => 'La bebida es requerida',
            // 'id_receta.confirmed' => 'El tipo de receta es requerida',
        ];
    }
}
