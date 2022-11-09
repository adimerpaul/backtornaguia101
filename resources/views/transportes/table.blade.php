<div class="table-responsive">
    <table class="table" id="transportes-table">
        <thead>
            <tr>
                <th>Tipo Transporte</th>
        <th>Marca</th>
        <th>Placa</th>
        <th>Color</th>

                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transportes as $transporte)
            <tr>
                <td>{{ $transporte->tipo_transporte }}</td>
            <td>{{ $transporte->marca }}</td>
            <td>{{ $transporte->placa }}</td>
            <td>{{ $transporte->color }}</td>
                <td>
                    {!! Form::open(['route' => ['transportes.destroy', $transporte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transportes.show', [$transporte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('transportes.edit', [$transporte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{--	Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
