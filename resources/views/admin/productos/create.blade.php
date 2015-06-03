@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo producto</div>

				<div class="panel-body">

				    @include('admin.productos.partials.messages')

				    {!! Form::open(['route' => 'admin.producto.store', 'method' => 'POST']) !!}

                        @include('admin.productos.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
