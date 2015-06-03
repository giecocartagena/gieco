<?php namespace transfor\Http\Controllers\Admin;

// Modelo

use transfor\library\myFunctions;
use transfor\Producto;
use transfor\Foto;

use transfor\Http\Requests;
use Illuminate\Http\Request;
use transfor\Http\Requests\CreateFotoRequest;

use transfor\Http\Controllers\Controller;


class FotoController extends Controller {

    public function getMostrarFotos($id)
    {
        //$fotos = Producto::find($id)->fotos();
        $producto       = Producto::find($id);
        $NombreProducto = $producto->nombre;

        $fotos = Foto::where('producto_id', '=', $id)->get();

        return view('admin.fotos.index', ['fotos' => $fotos, 'producto_id' => $id, 'producto_nombre' => $NombreProducto]);
    }


    public function getCrearFoto($id)
    {
        $producto = Producto::find($id);

        return view('admin.fotos.create', ['id' => $id, 'nombre' => $producto->nombre]);
    }


    public function postGuardar(CreateFotoRequest $request)
    {
        $myFunctions1 = new myFunctions();

        $id = $request->get('id');

        $imagen = $request->file('imagen');
        $nombre = $imagen->getClientOriginalName();
        $NombreLimpio = ($myFunctions1->CrearSlug($nombre));

        $directorio = getcwd() . '/fotos/productos/' . $id . '/';

        $imagen->move($directorio, $NombreLimpio);

        Foto::create(
          [
              'imagen'      => '/fotos/productos/' . $id . '/' . $NombreLimpio,
              'producto_id' => $id
          ]
        );

        return redirect()->to('admin/foto/mostrar-fotos/' . $id);
    }

    public function getEliminarFoto($id)
    {
        Foto::destroy($id);

        return redirect()->back();
    }

}
