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
use giecocartagena\Barrios;

use giecocartagena\Http\Requests;
use giecocartagena\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// Componente Carbon para fechas
use Carbon\Carbon;

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

        $barrios = ['' => ''] + Barrios::lists('nombre', 'id');
        $datos['barrios'] = $barrios;

        // Dejar la localidad y el estrato en blanco
        $datos['ubicacion'] = ['localidad' => '', 'estrato' => ''];

        // return 'pantalla para crear el registro poblacional';
		return view('admin.registropoblacional.create', $datos);
	}


	public function store(CreateRegistropoblacionalRequest $request)
	{
		$entradas = $request->all();

        // Convertir la fecha de nacimiento del JqueryUI.DatePicker a MySQL
        $parts = explode(' DE ', $entradas['fechanacimiento']);
        $entradas['fechanacimiento'] = "$parts[2]-" . $this->getNumeroMes($parts[1]) . "-$parts[0]";

        // Convertir la fecha de diagnostico del JqueryUI.DatePicker a MySQL
        $parts2 = explode(' DE ', $entradas['fechadiagnostico']);
        $entradas['fechadiagnostico'] = "$parts2[2]-" . $this->getNumeroMes($parts2[1]) . "-$parts2[0]";

        // Convertir la fecha del ultimo control medico del JqueryUI.DatePicker a MySQL
        $parts2 = explode(' DE ', $entradas['fechaultcontrolmed']);
        $entradas['fechaultcontrolmed'] = "$parts2[2]-" . $this->getNumeroMes($parts2[1]) . "-$parts2[0]";

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

        $lugaresdiagnostico = Lugaresdiagnostico::lists('nombre', 'codigo');
        $datos['lugaresdiagnostico'] = $lugaresdiagnostico;

        $tratamientos = Tratamientos::lists('nombre', 'codigo');
        $datos['tratamientos'] = $tratamientos;

        $meses = Meses::lists('nombre', 'id');
        $datos['meses'] = $meses;

        $barrios = Barrios::lists('nombre', 'id');
        $datos['barrios'] = $barrios;

        //Obtener el modelo principal en base al codigo(id)
        $registropoblacional = Registropoblacional::findOrFail($id);
        $registropoblacional->fechanacimiento    = $registropoblacional->getFechaNacimientoLargaAttribute();
        $registropoblacional->fechadiagnostico   = $registropoblacional->getFechaDiagnosticoLargaAttribute();
        $registropoblacional->fechaultcontrolmed = $registropoblacional->getFechaUltControlMedLargaAttribute();

        $datos['registropoblacional'] = $registropoblacional;


        // Obtener la localidad y estrato seleccionados
        $barrio = Barrios::find($registropoblacional->residenciahabitual);
        if(isset($barrio)){
            $localidad = $barrio->localidad;
            $estrato   = $barrio->estrato;
        }else{
            $localidad = "";
            $estrato   = "";
        }
        $datos['ubicacion'] = ['localidad' => $localidad, 'estrato' => $estrato];


        return view('admin.registropoblacional.edit', $datos);
        // $date = Carbon::now('America/Bogota');
        // dd($date->format('d-m-Y'));
	}


    public function getNumeroMes($NombreMes)
    {
        $NombreMes = strtoupper($NombreMes);
        if($NombreMes == "ENERO"):
            $NumeroMes = '01';
        elseif($NombreMes == "FEBRERO"):
            $NumeroMes = '02';
        elseif($NombreMes == "MARZO"):
            $NumeroMes = '03';
        elseif($NombreMes == "ABRIL"):
            $NumeroMes = '04';
        elseif($NombreMes == "MAYO"):
            $NumeroMes = '05';
        elseif($NombreMes == "JUNIO"):
            $NumeroMes = '06';
        elseif($NombreMes == "JULIO"):
            $NumeroMes = '07';
        elseif($NombreMes == "AGOSTO"):
            $NumeroMes = '08';
        elseif($NombreMes == "SEPTIEMBRE"):
            $NumeroMes = '09';
        elseif($NombreMes == "OCTUBRE"):
            $NumeroMes = '10';
        elseif($NombreMes == "NOVIEMBRE"):
            $NumeroMes = '11';
        else:
            $NumeroMes = '12';
        endif;

        return $NumeroMes;

    }

	public function update(EditRegistropoblacionalRequest $request, $id)
	{
        $registropoblacional = Registropoblacional::findOrFail($id);

        $entradas = $request->all();

        // Convertir la fecha de nacimiento del JqueryUI.DatePicker a MySQL
        $parts = explode(' DE ', $entradas['fechanacimiento']);
        if(isset($parts2[2])){
            $entradas['fechanacimiento'] = "$parts[2]-" . $this->getNumeroMes($parts[1]) . "-$parts[0]";
        }else{
            $entradas['fechanacimiento'] = "";
        }

        // Convertir la fecha de diagnostico del JqueryUI.DatePicker a MySQL
        $parts2 = explode(' DE ', $entradas['fechadiagnostico']);
        if(isset($parts2[2])) {
            $entradas['fechadiagnostico'] = "$parts2[2]-" . $this->getNumeroMes($parts2[1]) . "-$parts2[0]";
        }else{
            $entradas['fechadiagnostico'] = "";
        }

        // Convertir la fecha de ultimo control medico del JqueryUI.DatePicker a MySQL
        $parts2 = explode(' DE ', $entradas['fechaultcontrolmed']);
        if(isset($parts2[2])) {
            $entradas['fechaultcontrolmed'] = "$parts2[2]-" . $this->getNumeroMes($parts2[1]) . "-$parts2[0]";
        }else{
            $entradas['fechaultcontrolmed'] = "";
        }

        // Grabar
        $registropoblacional->fill($entradas);
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
