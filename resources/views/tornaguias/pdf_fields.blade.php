<!-- Id Empresa Field -->
<br>
<div class="form-group">
    <p style="color:red;padding-left: 580px; padding-top:20px;">No. 00899{{ $tornaguia->id}}</p>
</div>
<div class="form-group">
    <p style="padding-left: 80px; padding-top:0px; margin-top: 10px;">{{ $tornaguia->created_at}}</p>
</div>

<!-- Id Empresa Field -->
<!--div class="form-group">
    {!! Form::label('id_empresa', 'Empresa:') !!}
    <p>{{ $tornaguia->id_empresa }}<?php $gols=App\Models\Empresa::select('*')->where('id',$tornaguia->id_empresa)->first(); echo $gols->nombre; ?></p>
</div-->

<!-- Yacimiento Field -->
<br><br><br><br>
<div class="form-group">
    <p style="padding-left: 140px;margin-top:-10px;">{{ $tornaguia->yacimiento }}</p>
    <p style="padding-left: 500px;margin-top:-80px;">{{ $tornaguia->destino }}</p>
</div>
<br>
<!-- Contratista Field -->
<div class="form-group">
    <p style="padding-left: 160px;margin-top:-10px;">Bolivar</p>
    <p style="padding-left: 500px;margin-top:-80px;">{{ $tornaguia->contratista }}</p>
</div>
<br><br><br>
<!-- Cantidad Field -->
<div class="form-group">
<p style="padding-left: 100px;margin-top:-30px;">Volqueta</p>
<p style="padding-left: 240px;margin-top:-100px;">VOLVO</p>
    <p style="padding-left: 465px;margin-top:-250px;">X</p>
</div>
<br>
<div class="form-group">
    <p style="padding-left: 100px;margin-top:-20px;">Blanco</p>
    <p style="padding-left: 240px;margin-top:-90px;">3145-THY</p>
    <p style="padding-left: 560px;margin-top:-220px;">{{ $tornaguia->minerales }}</p>
</div>
<div class="form-group">
    <p style="padding-left: 540px;margin-top: -30px;">{{ $tornaguia->cantidad }}</p>
</div>
<!-- Minerales Field -->
<div class="form-group">
    <p style="padding-left: 140px;margin-top:-30px;font-size:10pt;">Marco Alfredo Choque Nina</p>
    <p style="padding-left: 540px;margin-top:-10px">0</p>
    <p style="padding-left: 200px;margin-top:-30px;">3534734 OR.</p>
</div>

