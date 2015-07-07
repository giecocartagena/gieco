@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
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
