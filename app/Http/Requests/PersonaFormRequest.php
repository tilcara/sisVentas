<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class PersonaFormRequest extends Request
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
        'nombre'=>'required|max:100',
        'tipo_documento'=>'required|max:10',
        'num_documento'=>'required|max:10',
        'direccion'=>'max:70',
        'telefono'=>'max:20',
        'email'=>'max:45'
        ];
    }
}
