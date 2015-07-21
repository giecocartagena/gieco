<?php namespace giecocartagena\Http\Controllers\Admin;

use giecocartagena\Http\Controllers\Controller;
// use giecocartagena\Http\Requests;
use Illuminate\Http\Request;

// modelo
use giecocartagena\Barrios;

class LocalidadyestratoController extends Controller {

    public function getIndex($id)
    {
        // $idBarrio = Input::get('residenciahabitual');
        // $entradas = $request->all();

        // $idBarrio = Request::input('residenciahabitual');

        // dd($idBarrio);

        // return response()->json(['localidad' => $idBarrio, 'estrato' => $idBarrio]);

        // $residenciahabitual = $request->input('edad');
        // $residenciahabitual = Request::input('residenciahabitual');

        // $registropoblacional = Registropoblacional::findOrFail($id);
        // $registropoblacional->fechanacimiento  = $registropoblacional->getFechaNacimientoLargaAttribute();

        $barrio = Barrios::findOrFail($id);
        $localidad = $barrio->localidad;
        $estrato   = $barrio->estrato;

        return response()->json(['localidad' => $localidad, 'estrato' => $estrato]);
        // return 'adasda';

        //return $idbarrio;
    }

}
