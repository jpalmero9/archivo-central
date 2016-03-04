<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class fichaValidaCrearRequest extends Request
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
            'id_ingreso'=> 'required',
            'id_diagnostico'=>'required',
            'nro_historia'=>'required|unique:ficha',
            'ci_prefijo'=>'required',
            'ci'=>'required',
            'fecha_Ingreso'=>'required',
            'fecha_registro'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',

        ];
    }
}
