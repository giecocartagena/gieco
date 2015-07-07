<?php namespace giecocartagena\Http\Requests;

use giecocartagena\Http\Requests\Request;

class CreateRegistropoblacionalRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cedula'            => 'required|unique:registropoblacional',
            'iniciales'         => 'required',
            'sexo'              => 'required',
            'fechanacimiento'   => 'required',
            'eps'               => 'required',
            'estrato'           => 'required',
            'estadio'           => 'required'
        ];
    }

}
