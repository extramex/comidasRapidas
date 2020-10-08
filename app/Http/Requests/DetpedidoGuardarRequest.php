<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetpedidoGuardarRequest extends FormRequest
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
            'cantidad'=> 'required',
            'valor_unitario'=> 'required',
        ];
    }
    public function messages(){
        return[
            'cantidad.required' => 'La  cantidad es requerida',
            'valor_unitario.required' => 'El  valor unitario es requerido',
        ];
    }
}
