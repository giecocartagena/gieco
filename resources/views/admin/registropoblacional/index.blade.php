@extends('app')

@section('estilos')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Registro poblacional</div>

				<div class="panel-body">
				    <p>
				        <a class="btn btn-info" href="{{ route('admin.registropoblacional.create') }}" role="button">Nuevo registro</a>
				    </p>
				    <p>{{ $registropoblacional->total() }} Registros. Página {{ $registropoblacional->currentPage() }} de {{ $registropoblacional->lastPage() }}</p>
					@include('admin.registropoblacional.partials.table')
                    {!! $registropoblacional->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div id="dialog-confirm" title="Confirmar borrado"></div>

@endsection


@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
            function fnOpenNormalDialog(codigo, fila) {

                $("#dialog-confirm").html("Realmente desea eliminar este registro?");

                // Define the Dialog and its properties.
                $( "#dialog-confirm" ).dialog({
                    resizable: false,
                    height:170,
                    modal: true,
                    buttons: {
                        "Si": function() {
                            $( this ).dialog( "close" );
                            EliminarRegistro(codigo, fila);
                        },
                        "No": function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            }

            $('.btn-delete').click(function(){
                var codigo = $(this).data('codigo');
                var fila   = $(this).parents('tr');
                fnOpenNormalDialog(codigo, fila);
            });

            function EliminarRegistro(codigo, fila) {
               var url =  window.location.protocol + "//" + window.location.host + window.location.pathname;
                               var ultimocaracter = url.substr(url.length - 1);
                               if(ultimocaracter == "/"){
                                   url = url + codigo;
                               }else{
                                   url = url + "/" +codigo;
                               }
                //alert(window.location.pathname);

                var token = <?php echo "'" . csrf_token() . "'"; ?>;
                var data  = "_method=DELETE&_token=" + token;
                var row   = fila;

                $.post(url, data, function(result) {
                    //alert(result);

                    if(result == ""){
                        alert("No se pudo eliminar el registro");
                    }else{
                        alert(result);
                        row.fadeOut();
                    }

                });

            }

    </script>
@endsection