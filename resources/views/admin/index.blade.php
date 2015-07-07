@extends('app')

@section('estilos')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
@endsection

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-10 col-md-offset-1">

    			<div class="panel panel-default">
    				<div class="panel-heading">Edición de los textos del sitio web</div>

    				<div class="panel-body">
                        <a href="/admin/cmsseccion/" class="btn btn-primary" role="button">Listado de secciones</a>
                        <a href="/admin/cmsnoticia/" class="btn btn-primary" role="button">Listado de noticias / textos</a>
    				</div>
    			</div>

    			<div class="panel panel-default">
                    <div class="panel-heading">Edición del registro poblacional</div>

                    <div class="panel-body">
                        <a href="/admin/registropoblacional/" class="btn btn-primary" role="button">Listado del registro poblacional</a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Edición de usuarios</div>

                    <div class="panel-body">
                        <a href="/admin/usuario/" class="btn btn-primary" role="button">Listado de usuarios</a>
                    </div>
                </div>

    		</div>
    	</div>
    </div>
@endsection
