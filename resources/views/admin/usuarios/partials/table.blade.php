<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Código</th>
        <th>Nombre / Descripción</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach($usuarios as $usuario)
        <tr data-id="{{ $usuario->id }}">
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->codigo }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <a href=" {{ route('admin.usuario.edit', $usuario) }}">Editar</a>
                <a href="#" class="btn-delete" data-codigo="{{ $usuario->id }}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>