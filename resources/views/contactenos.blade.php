@extends('layout')

@section('tituloprincipal')
    CONTACTENOS
@stop

@section('encabezado')

@stop

@section('contenido')

    <p>
         @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
            <script>alert('Su mensaje fue enviado con éxito');</script>
        @endif
    </p>

    <p>
        <h1>GIECO - Cartagena</h1>
    </p>
    <p>
        <br>
        admin@giecocartagena.com <br>
        <b>Cartagena - Bolívar </b>
        <br>
    </p>
    <p>
        <br>
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d125577.4633555731!2d-75.52590303139364!3d10.398070211829145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1436278275411" width="100%" height="260em" frameborder="0" style="border:0"></iframe>



    <p>
        <br><br><br>
        <h1>Servicio al cliente</h1>
    </p>
    <p>
        <br>
        Celular: 313 xxx xxx <br>
        xxx@hotmail.com <br>
        <br>
    </p>

    <p>
        <br>
    </p>

    <div class="reply-section">
        <div class="reply-section-head">
            <div class="reply-section-head-text">

                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
                </ul>

                @if(Session::has('message'))
                    <div class="alert alert-info">
                      {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <p><br/></p>

    <div class="reply-section">
        <div class="reply-section-head">
            <div class="reply-section-head-text">
                <h3>Favor escriba sus inquietudes o comentarios*</h3>
            </div>
            <div class="clear-fix"></div>
        </div>

        @include('partials.formulario')
    </div>

@stop


