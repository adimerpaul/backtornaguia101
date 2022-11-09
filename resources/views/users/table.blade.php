<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
       
        <th>Tipo Usuario</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha Nacimiento</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Foto Perfil</th>

                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->tipo_usuario }}</td>
            <td>{{ $user->nombres }}</td>
            <td>{{ $user->apellidos }}</td>
            <td>{{ $user->fecha_nacimiento }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->celular }}</td>
            <td>{{ $user->foto_perfil }}</td>
           
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{--!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!--}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
