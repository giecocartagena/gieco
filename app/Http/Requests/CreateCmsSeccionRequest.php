<?php namespace giecocartagena\Http\Requests;

use giecocartagena\Http\Requests\Request;

class CreateCmsSeccionRequest extends Request {

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
            'nombre' => 'required|unique:cms_secciones'
		];
	}

}
