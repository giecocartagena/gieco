
<div class="form-group">

    <div class="panel panel-success">
        <div class="panel-heading">1. Datos sociodemográficos</div>

        <div class="panel-body">
            <div class="col-md-12" >
                {!! Form::label('cedula', 'Cédula') !!}
                {!! Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Digite la cédula', 'min' => '1', 'max' => '9999999999999999', 'onkeypress' => 'return event.charCode >= 48 && event.charCode <= 57'] ) !!}

                {!! Form::label('iniciales', 'Iniciales') !!}
                {!! Form::text('iniciales', null, ['class' => 'form-control', 'placeholder' => 'Digite las iniciales', 'onblur' => 'this.value=this.value.toUpperCase()'] ) !!}

                {!! Form::label('sexo', 'Sexo') !!}
                {!! Form::select('sexo', $genero, null, ['class' => 'form-control']) !!}

                {!! Form::label('fechanacimiento', 'Fecha de nacimiento') !!}
                {!! Form::text('fechanacimiento', null, ['class' => 'form-control', 'onchange' => 'calcularedad();']) !!}

                {!! Form::label('edad', 'Edad') !!}
                {!! Form::text('edad', null, ['class' => 'form-control']) !!}

            </div>

            <div class="col-md-6 contact-section-left-grid">
                {!! Form::label('residenciahabitual', 'Residencia habitual') !!}
            </div>
            <div class="col-md-3 contact-section-center-grid">
                {!! Form::label('localidad', 'Localidad') !!}

            </div>
            <div class="col-md-3 contact-section-right-grid">
                {!! Form::label('estrato', 'Estrato') !!}
            </div>

            <div class="col-md-6 contact-section-left-grid">
                {!! Form::select('residenciahabitual', $barrios, null, ['class' => 'form-control', 'width' => '20%']) !!}
            </div>
            <div class="col-md-3 contact-section-center-grid">
                <input class="form-control" name="localidad" type="text" id="localidad" readonly="readonly" value="{!! $ubicacion["localidad"] !!}">
            </div>
            <div class="col-md-3 contact-section-right-grid">
                <input class="form-control" name="estrato" type="text" id="estrato" readonly="readonly" value="{!! $ubicacion["estrato"] !!}">
            </div>

            <div class="col-md-12" >
                {!! Form::label('lugarnacimiento', 'Lugar de nacimiento') !!}
                {!! Form::text('lugarnacimiento', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

                {!! Form::label('regimenseguridadsocial', 'Régimen seguridad social') !!}
                {!! Form::select('regimenseguridadsocial', $regimenss, null, ['class' => 'form-control']) !!}

                {!! Form::label('eps', 'EPS') !!}
                {!! Form::select('eps', $eps, null, ['class' => 'form-control']) !!}

                {!! Form::label('estrato', 'Estrato') !!}
                {!! Form::text('estrato', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">2. Datos de tumor</div>

        <div class="panel-body">
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
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">3. Datos de las fuentes de información </div>

        <div class="panel-body">
            {!! Form::label('lugardiganostico', 'Lugar diganóstico') !!}
            {{-- Form::text('lugardiganostico', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) --}}
            {!! Form::select('lugardiganostico', $lugaresdiagnostico, null, ['class' => 'form-control']) !!}

            {!! Form::label('numerobiopsia', 'Número biopsia') !!}
            {!! Form::text('numerobiopsia', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

            {!! Form::label('lugartratamiento', 'Lugar tratamiento') !!}
            {!! Form::text('lugartratamiento', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}

        </div>
    </div>


    <div class="panel panel-success">
        <div class="panel-heading">4. Datos del tratamiento</div>

        <div class="panel-body">
            {!! Form::label('datostratamiento', 'Datos tratamiento') !!}
            {!! Form::select('datostratamiento', $tratamientos, null, ['class' => 'form-control']) !!}

            {!! Form::label('fechaultcontrolmed', 'Fecha último control médico') !!}
            {!! Form::text('fechaultcontrolmed', null, ['class' => 'form-control']) !!}

        </div>
    </div>



    <div class="panel panel-success">
        <div class="panel-heading">5. Datos del seguimiento</div>

        <div class="panel-body">
            {!! Form::label('certificadodefuncion', 'Certificado defunción') !!}
            {!! Form::text('certificadodefuncion', null, ['class' => 'form-control', 'onblur' => 'this.value=this.value.toUpperCase()']) !!}
        </div>
    </div>

</div>