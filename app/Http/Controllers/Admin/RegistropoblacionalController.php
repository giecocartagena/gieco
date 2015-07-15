<?php namespace giecocartagena\Http\Controllers\Admin;

use giecocartagena\Http\Requests\CreateRegistropoblacionalRequest;
use giecocartagena\Http\Requests\EditRegistropoblacionalRequest;

// Modelo
use giecocartagena\Registropoblacional;

// Modelos auxiliares
use giecocartagena\Genero;
use giecocartagena\Eps;
use giecocartagena\Regimenss;
use giecocartagena\Tiposmuestras;
use giecocartagena\Lugaresdiagnostico;
use giecocartagena\Tratamientos;
use giecocartagena\Meses;

use giecocartagena\Http\Requests;
use giecocartagena\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistropoblacionalController extends Controller {

    // Este es el middleware de autenticacion //
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function index()
	{
		$registropoblacional = Registropoblacional::Paginate(5);
        return view('admin.registropoblacional.index', compact('registropoblacional'));
	}


	public function create()
	{
        $genero = ['' => ''] + Genero::lists('nombre', 'codigo');
		$datos['genero'] = $genero;

		$eps = ['' => ''] + Eps::lists('nombre', 'id');
		$datos['eps'] = $eps;

		$regimenss = ['' => ''] + Regimenss::lists('nombre', 'codigo');
		$datos['regimenss'] = $regimenss;

		$tiposmuestras = ['' => ''] + Tiposmuestras::lists('nombre', 'codigo');
		$datos['tiposmuestras'] = $tiposmuestras;

		$lugaresdiagnostico = ['' => ''] + Lugaresdiagnostico::lists('nombre', 'codigo');
		$datos['lugaresdiagnostico'] = $lugaresdiagnostico;

		$tratamientos = ['' => ''] + Tratamientos::lists('nombre', 'codigo');
		$datos['tratamientos'] = $tratamientos;

		$meses = ['' => ''] + Meses::lists('nombre', 'id');
		$datos['meses'] = $meses;
		

        // return 'pantalla para crear el registro poblacional';
		return view('admin.registropoblacional.create', $datos);
	}


	public function store(CreateRegistropoblacionalRequest $request)
	{
		$entradas = $request->all();
		// dd($entradas['fechanacimiento']);
		// $entradas['fechanacimiento'] = '';
        $registropoblacional = Registropoblacional::create($entradas);
        return redirect()->route('admin.registropoblacional.index');
	}


	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		// Esto es para el combobox
		$genero = Genero::lists('nombre', 'codigo');
		$datos['genero'] = $genero;

		$eps = Eps::lists('nombre', 'id');
		$datos['eps'] = $eps;

		$regimenss = Regimenss::lists('nombre', 'codigo');
		$datos['regimenss'] = $regimenss;

		$tiposmuestras = Tiposmuestras::lists('nombre', 'codigo');
		$datos['tiposmuestras'] = $tiposmuestras;

        $registropoblacional = Registropoblacional::findOrFail($id);
        $datos['registropoblacional'] = $registropoblacional;

        $lugaresdiagnostico = Lugaresdiagnostico::lists('nombre', 'codigo');
		$datos['lugaresdiagnostico'] = $lugaresdiagnostico;

		$tratamientos = Tratamientos::lists('nombre', 'codigo');
		$datos['tratamientos'] = $tratamientos;

		$meses = Meses::lists('nombre', 'id');
		$datos['meses'] = $meses;


        return view('admin.registropoblacional.edit', $datos);
	}

	public function update(EditRegistropoblacionalRequest $request, $id)
	{
        $registropoblacional = Registropoblacional::findOrFail($id);
        // dd($request->all());

        $registropoblacional->fill($request->all());
        $registropoblacional->save();

        return \Redirect::route('admin.registropoblacional.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
        //return $id;
        //Categoria::destroy($id);

        $registropoblacional = Registropoblacional::find($id);
        $registropoblacional->delete();

        $message = $registropoblacional->nombre . ' fue eliminado de la base de datos';

        if ($request->ajax()) {
            return $message;
        }


	}

}
