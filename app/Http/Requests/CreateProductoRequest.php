<?php namespace giecocartagena\Http\Requests;

use giecocartagena\Http\Requests\Request;

class CreateProductoRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre'        => 'required|unique:productos',
            'categoria_id'  => 'required'
        ];
    }

}
