<!-- Tipo Transporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_transporte', 'Tipo Transporte:') !!}
    {!! Form::text('tipo_transporte', null, ['class' => 'form-control','maxlength' => 18,'maxlength' => 18]) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Placa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('placa', 'Placa:') !!}
    {!! Form::text('placa', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>
<input type="hidden" id="id_usuario" name="id_usuario" value="1">
<input type="hidden" id="estado" name="estado" value="1">
<!-- Estado Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field>
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::number('id_usuario', null, ['class' => 'form-control']) !!}
</div-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transportes.index') }}" class="btn btn-default">Cancelar</a>
</div>
