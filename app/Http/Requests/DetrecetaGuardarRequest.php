<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetrecetaGuardarRequest extends FormRequest
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
            'unidad_medida'=> 'required',                        
        ];
    }
    public function messages(){
        return[
            'cantidad.required' => 'La cantidad es requerida',
            'unidad_medida.required' => 'La unidad de medida es requerida',            
        ];
    }
}
