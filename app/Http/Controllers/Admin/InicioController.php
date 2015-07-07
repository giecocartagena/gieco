<?php namespace giecocartagena\Http\Controllers\Admin;

use giecocartagena\Http\Requests;
use giecocartagena\Http\Controllers\Controller;

class InicioController extends Controller {

    // Este es el middleware de autenticacion //
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -------------------------------------- //

    public function getIndex()
    {
        return view('admin.index');
    }

}