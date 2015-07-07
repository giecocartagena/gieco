<?php namespace giecocartagena\Http\Requests;

use giecocartagena\Http\Requests\Request;

class CreateFotoRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'imagen'        => 'required|image|max:3000'
        ];
        /*
        return [
            'id'            => 'required|exists:productos,id',
            'imagen'        => 'required|image|max:3000',
            'categoria_id'  => 'required'
        ];
        */
    }

}
