<div class="form-group col-sm-6">
    {!! Form::label('fecha_tornaguia', 'Fecha de Tornaguia:') !!} {!! date('d') !!} / {!! date('m') !!} / {!! date('Y') !!} <br>
    {!! Form::text('fecha_tornaguia', null,['class' => 'form-control']) !!}
</div>

<!-- Yacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_tornaguia', 'Número Asignado:') !!}<br>

	 {!! Form::text('no_tornaguia', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30,'style' => 'color:red']) !!}
	</p>
	<input type="hidden" id="id_usuario" name="id_usuario" value="1">
<input type="hidden" id="estado" name="estado" value="1">
</div>
<br>
<div class="form-group col-sm-12" style="color:white; background-color:#72a89c;width:100%;font-size:20px;">
    PROPIETARIO DEL MINERAL
</div>

<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', 'Empresa Destino:') !!}
    {!! Form::select('id_empresa', $unidadOptions,['required'=>'required'], ['class'=>'form-control']) !!}
</div>

<!-- Contratista Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contratista', 'Contratista:') !!}
    {!! Form::select('id_contratista', $contratistaOptions, null, ['class'=>'form-control']) !!}
</div>
<BR>
<div class="form-group col-sm-12" style="color:white; background-color:#72a89c;width:100%;font-size:20px;">
    PROCEDENCIA
</div>

<!-- Yacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yacimiento', 'Yacimiento:') !!}
  
    {!! Form::text('yacimiento', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30,'style' => 'text-transform:uppercase']) !!}
	<!--input type="hidden" id="yacimiento" name="yacimiento" value=""-->
</div>
<!-- Tranca de Control Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tranca', 'Tranca de Control:') !!}
    {!! Form::text('tranca', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30,'style' => 'text-transform:uppercase']) !!}
</div>
<br>

<div class="form-group col-sm-12" style="color:white; background-color:#72a89c;width:100%;font-size:20px;">
    MEDIO DE TRANSPORTE
</div>

<!-- Id Transporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_transporte', 'Transporte:') !!}
    {!! Form::select('id_transporte', $transporteOptions, null, ['class'=>'form-control']) !!}
    <div id="add_to_me">
    </div>

</div>

<!-- Id Conductor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_conductor', 'Conductor:') !!}
    {!! Form::select('id_conductor', $conductorOptions, null, ['class'=>'form-control']) !!}
    <div id="add_to_me2">
    </div>
</div>


<div class="form-group col-sm-12" style="color:white; background-color:#72a89c;width:100%;font-size:20px;">
    TIPO DE MATERIAL
</div>
<!-- Tipo Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_manterial', 'Tipo de Material:') !!}<br>
    {{-- Form::text('tipo_manterial', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) --}}
    {{ Form::radio('tipo_manterial', 'broza' , true) }}  Broza
    {{ Form::radio('tipo_manterial', 'embolsado' , false) }} Embolsado
</div> 

<!-- Minerales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minerales', 'Minerales:') !!}<br>
    <input type="checkbox" class="checkboxstyle"  id="id_peer_educator" value="Sn" style="display:inline;"/>Sn
    <input type="checkbox" class="checkboxstyle"  id="id_chw" value="Ag" style="display:inline;">Ag
    <input type="checkbox" class="checkboxstyle"  id="id_health_provider" value="Pb"/>Pb
    <input type="checkbox" class="checkboxstyle"  id="id_purchase" value="Zn"/>Zn
    <input type="checkbox" class="checkboxstyle"  id="otros" value="Otros"/>Otros<br>
    <input type="text" id="minerales" class="minerales" name="minerales" placeholder=" Minerales : "/>
</div>

<!-- Cantidad Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div-->

<!-- Id Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso en Tn.:') !!}
    {!! Form::number('peso', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sacos', 'Cantidad de Sacos:') !!}
    {!! Form::number('sacos', null, ['class' => 'form-control']) !!}
</div>
<!-- Autorizadopor Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('autorizadopor', 'Autorizado por:') !!}
    {!! Form::text('autorizadopor', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div-->

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado de la Tornaguia:') !!}<br>
    {{--  Form::number('estado', null, ['class' => 'form-control']) --}}
    {{ Form::radio('estado', '1' , true) }}  Activa
    {{ Form::radio('estado', '0' , false) }} Anulada
</div> 

<!-- Id Usuario Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::number('id_usuario', null, ['class' => 'form-control']) !!}
</div-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tornaguias.index') }}" class="btn btn-default">Cancelar</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>

$('.checkboxstyle').on("change",function () 
{
    var str =" ";
    $('.checkboxstyle:checked').each(function()
	{
        str+= $(this).val()+",";
    });
    $('#minerales').val(str.substring(0, str.length - 1));
});

</script>
<script type="text/javascript">
    // Script para cargar los datos del Transporte
    $(document).ready(function() {
        $('select[name="id_transporte"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/backtornaguia101/public/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {                
                    
                        console.log(data);
                        document.getElementById("add_to_me").innerHTML += 
                        "Tipo de Vehiculo: "+data['tipo_transporte']+"<br>"+
                        "Marca: "+data['marca']+"<br>"+
                        "Color: "+data['color'];
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });

 // Script para cargar los datos del Conductor
 $(document).ready(function() {
        $('select[name="id_conductor"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/backtornaguia101/public/myform2/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {                
                    
                        console.log(data);
                        document.getElementById("add_to_me2").innerHTML += 
                        "Numero de Licencia: "+data['no_licencia']+"<br>"+
                        "Telefono Celular: "+data['celular'];
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });

    // Script para cargar los datos del Contratista
 $(document).ready(function() {
        $('select[name="id_contratista"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/backtornaguia101/public/myform3/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {                
                    
                        console.log(data);
                        document.getElementById("add_to_me3").innerHTML += 
                        "Yacimiento: "+data['seccion']+"<br>";
						document.getElementById("yacimiento").value= data['seccion'];
						
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>