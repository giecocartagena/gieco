<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Identificación</th>
        <th>Iniciales</th>
        <th>Sexo</th>
        <th>Residencia habitual</th>
        <th>Lugar de nacimiento</th>
        <th>Estrato</th>
        <th>Acciones</th>
    </tr>
    @foreach($registropoblacional as $rp)
        <tr data-id="{{ $rp->id }}">
            <td>{{ $rp->id }}</td>
            <td>{{ $rp->cedula }}</td>
            <td>{{ $rp->iniciales }}</td>
            <td>{{ $rp->sexo }}</td>
            <td>{{ $rp->residenciahabitual }}</td>
            <td>{{ $rp->lugarnacimiento }}</td>
            <td>{{ $rp->estrato }}</td>
            <td>
                <a href=" {{ route('admin.registropoblacional.edit', $rp) }}">Editar</a>
                <a href="#" class="btn-delete" data-codigo="{{ $rp->id }}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>