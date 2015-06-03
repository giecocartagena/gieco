<?php namespace transfor\Http\Controllers\Admin;

use transfor\Http\Requests\CreateProductoRequest;
use transfor\Http\Requests\EditProductoRequest;

// Modelo
use transfor\Producto;
use transfor\Categoria;

use transfor\Http\Requests;
use transfor\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller {

    public function index()
    {
        $productos = Producto::Paginate(10);
        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = ['' => ''] + Categoria::lists('nombre', 'id');
        $datos['categorias'] = $categorias;
        return view('admin.productos.create', $datos);
    }

    public function store(CreateProductoRequest $request)
    {
        $producto = Producto::create($request->all());
        return redirect()->route('admin.producto.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categorias = Categoria::lists('nombre', 'id');
        $datos['categorias'] = $categorias;

        $producto = Producto::findOrFail($id);
        $datos['producto'] = $producto;

        return view('admin.productos.edit', $datos);
    }

    public function update(EditProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->fill($request->all());
        $producto->save();

        return \Redirect::route('admin.producto.index');

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
        //Producto::destroy($id);

        $producto = Producto::find($id);
        $producto->delete();

        $message = $producto->nombre . ' fue eliminado de la base de datos';

        if ($request->ajax()) {
            return $message;
        }


    }

}
