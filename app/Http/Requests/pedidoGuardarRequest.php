<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pedidoGuardarRequest extends FormRequest
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
            // 'id_domicilio' => 'confirmed',
            // 'id_mesa' => 'confirmed',
            // 'id_cliente' => 'confirmed',
            // 'id_empleado' => 'confirmed',

        ];
    }
    public function messages(){
        return[
            'fecha_hora.required' => 'La  fecha y hora es requerida',        
            // 'id_domicilio.confirmed' => 'El nombre de domicilio es requerido',
            // 'id_mesa.confirmed' => 'El numero de mesa es requerido',
            // 'id_cliente.confirmed' => 'El nombre del cliente es requerido',
            // 'id_empleado.confirmed' => 'El nombre del empleado es requerido',

        ];
    }
}
