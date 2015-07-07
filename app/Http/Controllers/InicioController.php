<?php namespace giecocartagena\Http\Controllers;

// Modelos
use giecocartagena\Categoria;
use giecocartagena\Cmsnoticia;

use giecocartagena\Http\Requests\ContactFormRequest;

class InicioController extends Controller {

    public function getIndex()
    {
        $categorias = Categoria::all();
        return view('index', compact('categorias'));
    }

    public function getNosotros()
    {
        $result = \DB::table('cms_secciones')
            ->select('id')
            ->where('nombre', 'NOSOTROS')
            ->get();

        if (isset($result[0]->id)){
            $idCategoria = $result[0]->id;
            $cmsnoticias = Cmsnoticia::where('seccion_id', '=', $idCategoria)->get();

            return view('nosotros', compact('cmsnoticias'));
        }
    }

    public function create()
    {
        return view('contactenos');
    }

    public function store(ContactFormRequest $request)
    {

        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();

        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...

        \Mail::send('email', $data, function($message) use ($request)
        {
            //remitente
            $message->from($request->Email, $request->Nombre);

            //asunto
            $message->subject($request->Asunto);

            //receptor
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

        });


        return \View::make('exito');



    }

}
