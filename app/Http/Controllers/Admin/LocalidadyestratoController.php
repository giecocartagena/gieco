<?php namespace giecocartagena\Http\Controllers\Admin;

use giecocartagena\Http\Controllers\Controller;
// use giecocartagena\Http\Requests;
use Illuminate\Http\Request;

// modelo
use giecocartagena\Barrios;

class LocalidadyestratoController extends Controller {

    public function getIndex($id)
    {
        $barrio = Barrios::findOrFail($id);
        $localidad = $barrio->localidad;
        $estrato   = $barrio->estrato;

        return response()->json(['localidad' => $localidad, 'estrato' => $estrato]);

    }

}
