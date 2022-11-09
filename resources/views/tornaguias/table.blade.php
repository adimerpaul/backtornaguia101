<div class="table-responsive">
    <table class="table" id="tornaguias-table">
        <thead>
            <tr>
        <th>No. Tornaguia</th>
        <th>Empresa Destino</th>
        <th>Contratista</th>
        <th>Minerales</th>
        <th>Tipo Material</th>
        <th>Transporte</th>
        <th>Conductor</th>

        <!--th>Autorizadopor</th-->
        <!--th>Estado</th>
        <th>Id Usuario</th-->
                <th>Acciones</th>
                <th>PDF</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tornaguias as $tornaguia)
            <tr>

            <td style="color:red;">{{ $tornaguia->no_tornaguia }}</td>
            <td><?php $gols=App\Models\Empresa::select('*')->where('id',$tornaguia->id_empresa)->first(); echo $gols->nombre; ?></td>
            <td><?php $gols=App\Models\Contratista::select('*')->where('id',$tornaguia->id_contratista)->first(); echo $gols->nombre; ?></td>
            <td>{{ $tornaguia->minerales }}</td>
            <td>{{ $tornaguia->tipo_manterial }}</td>
            <td><?php $trans=App\Models\Transporte::select('*')->where('id',$tornaguia->id_transporte)->first(); if ($trans) echo $trans->placa; else echo "No se registro"; ?></td>

            <td><?php $gals=App\Models\Conductor::select('*')->where('id',$tornaguia->id_conductor)->first(); echo $gals->nombre; ?></td>
    
            <!--td>{{ $tornaguia->autorizadopor }}</td>
            <td>{{ $tornaguia->estado }}</td>
            <td>{{ $tornaguia->id_usuario }}</td-->
                <td>
                    <!--{!! Form::open(['route' => ['tornaguias.destroy', $tornaguia->id], 'method' => 'delete']) !!} -->
                    
                        <a href="{{ route('tornaguias_view', [$tornaguia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tornaguias.edit', [$tornaguia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
</td>
<td>
                        <a href="{{ route('tornaguias_pdf', [$tornaguia->id]) }}" class='btn btn-default btn-xs' target="_BLANK"><i class="glyphicon glyphicon-qrcode"></i></a>
                        <a href="{{ route('tornaguias_pdfblanco', [$tornaguia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-duplicate"></i></a>
                        <a href="{{ route('tornaguias_pdfgen', [$tornaguia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-open-file"></i></a>
                   <!-- {!! Form::close() !!} -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
