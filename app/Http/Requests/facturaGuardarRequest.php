<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class facturaGuardarRequest extends FormRequest
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
            'fecha_hora'=> 'required',
            'valor_domicilio'=> 'required',
            'total'=> 'required',
        ];
    }
    public function messages(){
        return[
            'nombre.required'=> 'El nombre es requerido',            
            'valor_domicilio.required'=> 'El valor de domicilio es requerido',
            'total.required'=> 'El total es requerido',            
        ];
    }
}
