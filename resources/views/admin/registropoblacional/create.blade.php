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
			<div class="panel panel-default">
				<div class="panel-heading">Nueva registro poblacional</div>

				<div class="panel-body">

				    @include('admin.registropoblacional.partials.messages')

				    {!! Form::open(['route' => 'admin.registropoblacional.store', 'method' => 'POST']) !!}

                        @include('admin.registropoblacional.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>

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
			$( "#fechanacimiento" ).datepicker({ changeYear: true, yearRange: '1920:2100' });
			$( "#fechadiagnostico" ).datepicker({ changeYear: true, yearRange: '1920:2100' });
			$( "#fechaultcontrolmed" ).datepicker({ changeYear: true, yearRange: '1920:2100' });
		});

		@include('admin.registropoblacional.partials.funcionesjavascript')

	</script>
@endsection