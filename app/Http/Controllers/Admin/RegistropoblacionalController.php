<?php namespace giecocartagena\Http\Controllers\Admin;

use giecocartagena\Http\Requests\CreateRegistropoblacionalRequest;
use giecocartagena\Http\Requests\EditRegistropoblacionalRequest;

// Modelo
use giecocartagena\Registropoblacional;

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
        // return 'pantalla para crear el registro poblacional';
		return view('admin.registropoblacional.create');
	}

	public function store(CreateRegistropoblacionalRequest $request)
	{
        $registropoblacional = Registropoblacional::create($request->all());
        return redirect()->route('admin.registropoblacional.index');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
        $registropoblacional = Registropoblacional::findOrFail($id);
        return view('admin.registropoblacional.edit', compact('registropoblacional'));
	}

	public function update(EditRegistropoblacionalRequest $request, $id)
	{
        $registropoblacional = Registropoblacional::findOrFail($id);
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
