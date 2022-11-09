<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::text('logo', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Nit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nit', 'Nit:') !!}
    {!! Form::text('nit', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Encabezado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encabezado', 'Encabezado:') !!}
    {!! Form::text('encabezado', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Estado Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div-->

<!-- Id Usuario Field -->
<input type="hidden" id="id_usuario" name="id_usuario" value="1">
<input type="hidden" id="estado" name="estado" value="1">
<!--div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::number('id_usuario', null, ['class' => 'form-control']) !!}
</div-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-default">Cancelar</a>
</div>
