@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio de sesión</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							Por favor corrija los siguientes errores:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
                            <label class="col-md-4 control-label">Código</label>
                            <div class="col-md-6">
                                {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>
							<div class="col-md-6">
							    {!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
									    {!! Form::checkbox('remember', '')  !!}
									    Mantener la sesión iniciada
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
							    {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary']) !!}
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
