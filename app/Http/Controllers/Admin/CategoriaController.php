<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateCategoriaRequest;
use App\Http\Requests\EditCategoriaRequest;

// Modelo
use App\Categoria;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller {

	public function index()
	{
		$categorias = Categoria::Paginate(5);
        return view('admin.categorias.index', compact('categorias'));
	}

	public function create()
	{
		return view('admin.categorias.create');
	}

	public function store(CreateCategoriaRequest $request)
	{
        $categoria = Categoria::create($request->all());
        return redirect()->route('admin.categoria.index');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$categoria = Categoria::findOrFail($id);
        return view('admin.categorias.edit', compact('categoria'));
	}

	public function update(EditCategoriaRequest $request, $id)
	{
        $categoria = Categoria::findOrFail($id);
        $categoria->fill($request->all());
        $categoria->save();

        return \Redirect::route('admin.categoria.index');

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

        $categoria = Categoria::find($id);
        $categoria->delete();

        $message = $categoria->nombre . ' fue eliminado de la base de datos';

        if ($request->ajax()) {
            return $message;
        }


	}

}
