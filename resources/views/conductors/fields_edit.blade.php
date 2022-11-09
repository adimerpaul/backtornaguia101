<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contacto', 'Contacto:') !!}
    {!! Form::text('contacto', null, ['class' => 'form-control','maxlength' => 40,'maxlength' => 40]) !!}
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

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('no_licencia', 'No. de Licencia:') !!}
    {!! Form::text('no_licencia', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Estado Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div-->

<input type="hidden" id="id_usuario" name="id_usuario" value="1">
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado de Registro de Conductor:') !!}<br>
    {{--  Form::number('estado', null, ['class' => 'form-control']) --}}
    {{ Form::radio('estado', '1' , true) }}  Activo
    {{ Form::radio('estado', '0' , false) }} Anulado
</div> 

<!-- Id Usuario Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::number('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('conductors.index') }}" class="btn btn-default">Cancelar</a>
</div>
