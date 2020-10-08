<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class domicilioGuardarRequest extends FormRequest
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
            'nom_empresa'=> 'required|min:1|max:100',
            'dir_domicilio'=> 'required',
            'fecha'=> 'required', 
            'estado'=> 'required', 
        ];
    }
    public function messages(){
        return[
            'nom_empresa.required'=> 'El nombre de empresa es requerido',
            'nom_empresa.min'=> 'El nombre de empresa debe tener como minimo 1 caracter',
            'nom_empresa.max'=> 'El nombre de empresa debe tener como maximo 100 caracteres',
            'dir_domicilio.required'=> 'La dirección de domicilio es requerida',
            'fecha.required'=> 'La fecha es requerida',
            'estado.required'=> 'El estado es requerido',
        ];
    }
}
