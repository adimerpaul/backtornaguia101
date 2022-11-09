<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::text('ci', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Fecha Socio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_socio', 'Fecha Socio:') !!}
    {!! Form::text('fecha_socio', null, ['class' => 'form-control','id'=>'fecha_socio']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_socio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado de la Tornaguia:') !!}<br>
    {{--  Form::number('estado', null, ['class' => 'form-control']) --}}
    {{ Form::radio('estado', '1' , true) }}  Activo
    {{ Form::radio('estado', '0' , false) }} Anulado
</div> 

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Modificar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratistas.index') }}" class="btn btn-default">Cancelar</a>
</div>
