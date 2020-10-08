<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mesaGuardarRequest extends FormRequest
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
            'n_mesa'=> 'required', 
        ];
    }
    public function messages(){
        return[            
            'n_mesa.required'=> 'El número de mesa es requerido',
        ];
    }
}
