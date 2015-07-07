<?php namespace giecocartagena\Http\Controllers;

// Modelos
use giecocartagena\Categoria;
use giecocartagena\Foto;
use giecocartagena\Producto;

use giecocartagena\Http\Requests;
use giecocartagena\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductoController extends Controller {


    public function show($id)
    {
        $producto = Producto::find($id);
        $foto = Foto::where('producto_id', '=', $id)->first();

        //var_dump($producto);
        //return view('producto', ['producto' => $producto]);
        return view('producto', compact('producto', 'foto'));
    }

}
