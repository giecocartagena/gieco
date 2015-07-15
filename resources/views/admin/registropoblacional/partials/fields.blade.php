<div class="form-group">
    {!! Form::label('cedula', 'Cédula') !!}
    {!! Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Digite la cédula', 'min' => '1', 'max' => '9999999999999999', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57'] ) !!}	

    {!! Form::label('iniciales', 'Iniciales') !!}
    {!! Form::text('iniciales', null, ['class' => 'form-control', 'placeholder' => 'Digite las iniciales', 'onblur' => 'this.value=this.value.toUpperCase()'] ) !!}

    {!! Form::label('sexo', 'Sexo') !!}
    {{-- Form::text('sexo', null, ['class' => 'form-control']) --}}
	{!! Form::select('sexo', $genero, null, ['class' => 'form-control']) !!}

    {!! Form::label('fechanacimiento', 'Fecha de nacimiento') !!}
    {!! Form::text('fechanacimiento', null, ['class' => 'form-control']) !!}

    {!! Form::label('edad', 'Edad') !!}
    {!! Form::text('edad', null, ['class' => 'form-control']) !!}

    {!! Form::label('residenciahabitual', 'Residencia habitual') !!}
    {!! Form::text('residenciahabitual', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('lugarnacimiento', 'Lugar de nacimiento') !!}
    {!! Form::text('lugarnacimiento', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('regimenseguridadsocial', 'Régimen seguridad social') !!}
    {{-- Form::text('regimenseguridadsocial', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) --]}
    {!! Form::select('regimenseguridadsocial', $regimenss, null, ['class' => 'form-control']) !!}

    {!! Form::label('eps', 'EPS') !!}
    {{-- Form::text('eps', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) --}}
    {!! Form::select('eps', $eps, null, ['class' => 'form-control']) !!}

    {!! Form::label('estrato', 'Estrato') !!}
    {!! Form::text('estrato', null, ['class' => 'form-control']) !!}

    {!! Form::label('iniciosintomasanio', 'Inicio sintomas (Año)') !!}
    {!! Form::number('iniciosintomasanio', null, ['class' => 'form-control', 'min' => '1950', 'max' => '2100', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57']) !!}    

    {!! Form::label('iniciosintomasmes', 'Inicio sintomas (Mes)') !!}
    {!! Form::select('iniciosintomasmes', $meses, null, ['class' => 'form-control']) !!}

    {!! Form::label('fechadiagnostico', 'Fecha diagnóstico') !!}
    {!! Form::text('fechadiagnostico', null, ['class' => 'form-control']) !!}

    {!! Form::label('metododiagnostico', 'Tipo de muestra') !!}
    {{-- Form::text('metododiagnostico', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) --}}
    {!! Form::select('metododiagnostico', $tiposmuestras, null, ['class' => 'form-control']) !!}

    {!! Form::label('otrotipomuestra', 'En caso de seleccionar OTROS, especifique cual') !!}
    {!! Form::text('otrotipomuestra', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}


    {!! Form::label('localizacionprimaria', 'Localización primaria') !!}
    {!! Form::text('localizacionprimaria', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('morfologia', 'Tipo histológico') !!}
    {!! Form::text('morfologia', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('estadio', 'Estadio') !!}
    {!! Form::text('estadio', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('lugardiganostico', 'Lugar diganóstico') !!}
    {{-- Form::text('lugardiganostico', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) --}}
    {!! Form::select('lugardiganostico', $lugaresdiagnostico, null, ['class' => 'form-control']) !!}

    {!! Form::label('numerobiopsia', 'Número biopsia') !!}
    {!! Form::text('numerobiopsia', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('lugartratamiento', 'Lugar tratamiento') !!}
    {!! Form::text('lugartratamiento', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

    {!! Form::label('datostratamiento', 'Datos tratamiento') !!}
    {{-- Form::text('datostratamiento', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) --}}
    {!! Form::select('datostratamiento', $tratamientos, null, ['class' => 'form-control']) !!}

    {!! Form::label('certificadodefuncion', 'Certificado defunción') !!}
    {!! Form::text('certificadodefuncion', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

</div>