<?php namespace giecocartagena\Http\Requests;

use giecocartagena\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditCategoriaRequest extends Request {

    /**
     * @var Route
     */
    private $route;

    public function __construct(Route $route)
    {

        $this->route = $route;
    }

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
            'nombre' => 'required|unique:categorias,nombre,' . $this->route->getParameter('categoria')
		];
	}

}
