<?php namespace giecocartagena\Http\Requests;

use giecocartagena\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditCmsNoticiaRequest extends Request {

    /**
     * @var Route
     */
    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|unique:cms_noticias,titulo,' . $this->route->getParameter('cmsnoticia')
        ];
    }

}
