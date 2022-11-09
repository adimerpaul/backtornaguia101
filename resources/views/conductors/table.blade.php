<div class="table-responsive">
    <table class="table" id="conductors-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Contacto</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Ciudad</th>
        <th>Licencia</th>

                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($conductors as $conductor)
            <tr>
                <td>{{ $conductor->nombre }}</td>
            <td>{{ $conductor->contacto }}</td>
            <td>{{ $conductor->telefono }}</td>
            <td>{{ $conductor->celular }}</td>
            <td>{{ $conductor->ciudad }}</td>
            <td>{{ $conductor->no_licencia }}</td>
                <td>
                    {!! Form::open(['route' => ['conductors.destroy', $conductor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('conductors.show', [$conductor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('conductors.edit', [$conductor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{--!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!--}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
