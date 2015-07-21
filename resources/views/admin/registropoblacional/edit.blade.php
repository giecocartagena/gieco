@extends('app')

@section('estilos')
	<style>		
		.form-control{text-transform: uppercase;}
		.ui-datepicker-year{ color: #010A0F;}
	</style>
	{!! Html::style('css/jquery-ui.css') !!}
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar registro {{ $registropoblacional->cedula }}</div>

				<div class="panel-body">

				    @include('admin.registropoblacional.partials.messages')

				    {!! Form::model($registropoblacional, ['route' => ['admin.registropoblacional.update', $registropoblacional], 'method' => 'PUT']) !!}

                        @include('admin.registropoblacional.partials.fields')
                        <button type="submit" class="btn btn-default">Actualizar registro</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
    <script>

    	//Array para dar formato en español
    	@include('admin.registropoblacional.partials.spanishcalendar')        

		$(function() {
			$( "#fechanacimiento" ).datepicker({ changeYear: true,  yearRange: '1920:2100' });
			$( "#fechadiagnostico" ).datepicker({ changeYear: true,  yearRange: '1920:2100' });
		});

        @include('admin.registropoblacional.partials.funcionesjavascript')

	</script>

	<script>
    	$(document).ready(function(){
    		$('#residenciahabitual').change(function(){

                var direccion = "/admin/localidadyestrato/" + $(this).val();

    			$.get(direccion,
    			function(data) {
    				$('#proceso_id').empty();
    				var iCnt = 0;
    				$.each(data, function(key, element) {
    					iCnt++;
    					if(iCnt == 1){
    					    $('#localidad').val(element);
    					}else{
    					    $('#estrato').val(element);
    					}
    				});
    			});

    			// alert($(this).val());
    		});
    	});
    </script>
@endsection