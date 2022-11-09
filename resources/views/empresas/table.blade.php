<div class="table-responsive">
    <table class="table" id="empresas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Ciudad</th>
        <th>Departamento</th>
        <th>Telefono</th>
        <th>Logo</th>
        <th>Nit</th>
        <th>Encabezado</th>
        <th>Estado</th>
        <th>Id Usuario</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empresas as $empresa)
            <tr>
                <td>{{ $empresa->nombre }}</td>
            <td>{{ $empresa->ciudad }}</td>
            <td>{{ $empresa->departamento }}</td>
            <td>{{ $empresa->telefono }}</td>
            <td>{{ $empresa->logo }}</td>
            <td>{{ $empresa->nit }}</td>
            <td>{{ $empresa->encabezado }}</td>
            <td>{{ $empresa->estado }}</td>
            <td>{{ $empresa->id_usuario }}</td>
                <td>
                    {{-- Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) --}}
                    <div class='btn-group'>
                        <a href="{{ route('empresas.show', [$empresa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('empresas.edit', [$empresa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{-- Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
