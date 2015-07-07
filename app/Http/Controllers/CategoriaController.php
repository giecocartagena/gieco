<?php namespace giecocartagena\Http\Controllers;

// Modelos
use giecocartagena\Categoria;
use giecocartagena\Producto;

use giecocartagena\Http\Requests;
use giecocartagena\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriaController extends Controller {

	public function index()
	{
		$categorias = Categoria::all();
        return view('categorias', compact('categorias'));
	}

	public function show($id)
	{
        //$productos = Producto::where('categoria_id', '=', $id)->get();
        $categoria = Categoria::find($id);

        $query = "SELECT p.id, p.nombre, COALESCE(MIN(f.imagen), '') AS imagen
                  FROM productos p
                  LEFT JOIN fotos f ON f.producto_id = p.id
                  WHERE p.categoria_id = :id
                  GROUP BY p.id, p.nombre";
        $productos = \DB::select($query, ['id' => $id]);

        //var_dump($results);

        return view('listadoproductos', compact('productos','categoria'));
        //return view('listadofix', compact('productos','categoria'));
	}

}
