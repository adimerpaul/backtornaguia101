<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Tipo Usuario Field -->
<div class="form-group">
    {!! Form::label('tipo_usuario', 'Tipo Usuario:') !!}
    <p>{{ $user->tipo_usuario }}</p>
</div>

<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{{ $user->nombres }}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    <p>{{ $user->apellidos }}</p>
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    <p>{{ $user->fecha_nacimiento }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $user->telefono }}</p>
</div>

<!-- Celular Field -->
<div class="form-group">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{{ $user->celular }}</p>
</div>

<!-- Foto Perfil Field -->
<div class="form-group">
    {!! Form::label('foto_perfil', 'Foto Perfil:') !!}
    <p>{{ $user->foto_perfil }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $user->estado }}</p>
</div>

<!-- Id Usuario Field -->
<div class="form-group">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    <p>{{ $user->id_usuario }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

