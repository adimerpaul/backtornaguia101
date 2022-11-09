<div class="table-responsive">
    <table class="table" id="contratistas-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>C.I.</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Direccion</th>
        <th>Fecha Socio</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contratistas as $contratista)
            <tr>
                <td>{{ $contratista->nombre }}</td>
            <td>{{ $contratista->telefono }}</td>
            <td>{{ $contratista->celular }}</td>
            <td>{{ $contratista->direccion }}</td>
            <td>{{ $contratista->ci }}</td>
            <td>{{ $contratista->fecha_socio }}</td>
            <!--td>{{ $contratista->estado }}</td>
            <td>{{ $contratista->id_usuario }}</td-->
                <td>
                    {{-- Form::open(['route' => ['contratistas.destroy', $contratista->id], 'method' => 'delete']) --}}
                    <div class='btn-group'>
                        <a href="{{ route('contratistas.show', [$contratista->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contratistas.edit', [$contratista->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{-- Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
