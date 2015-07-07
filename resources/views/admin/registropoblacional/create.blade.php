@extends('app')

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
