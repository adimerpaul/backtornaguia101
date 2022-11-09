<style>
  td {
    border: 1px solid #FFF;
    font-family:Arial;

  }
</style>
<table style="width:100%;">
  <tr>
    <td width="20%" style="text-align:center;">
      <br>
    </td>
    <td width="60%" style="text-align:center;">
      <div style="font-size:24px;text-align:center;font-weight:600;color:#FFF;">
        Cooperativa Minera "POOPO" R.L.<br>
        <div style="font-size:12px;text-align:center;font-weight:400;color:#FFF;">
            Personaría Jurídica No. 487 - Ficha de Registro No.464. NIT 1023457027<br>
            Cel. 72318861- 71852849 - 72467605 - 71101685 <br>
            Poopo - Oruro - Bolivia
        </div>
      </td>
      <td width="20%" style="text-align:center;">
        <br>
      </td>
  </tr>
  <tr>
    <td colspan=3>
      <div style="text-align:center;font-size:30px;color:#FFF;background-color:#FFF;font-weight:700;font-family: Arial;"
      >TORNAGUIA O CARTA PORTE</div>
    </td>
  </tr>
</table>
<table style="width:100%;">
  <tr>
  <td style="border-top: -25px white solid;">
      <p style="color:#FFF;display:inline;margin-left:60px;">Fecha:</p>{{ date('d/m/Y', strtotime($tornaguia->fecha_tornaguia)) }} 
  </td>
  <td>
  <p style="color:#FFF;;display:inline;margin-left:100px;">No:</p><p style="color:red;display:inline;"> </p>
  </td>
  </tr>
  <tr>
  <td style="text-align:center; color: white; background-color: #FFF;; font-size:20px;">
      
  </td>
  <td style="text-align:center; color: white; background-color: #FFF;; font-size:20px;">
      
  </td>
  </tr>
  <tr>
  <td style="border-top: -25px white solid;">
  <p style="color:#FFF;display:inline;">Departamento:  Oruro&nbsp;&nbsp;&nbsp;Municipio: Poopó</p><br>
  <p style="color:#FFF;display:inline;margin-left:20px;">Yacimiento:</p><?php $q=App\Models\Contratista::select('*')->where('id',$tornaguia->id_contratista)->first(); ?> {{$tornaguia->yacimiento}}<br>
  <p style="color:#FFF;display:inline;">Tranca de Control:</p> {{ $tornaguia->tranca }}
  </td>
  <td style="border-top: -25px white solid; margin-left:-100px;">
  <p style="color:#FFF;display:inline;text-align:center;">Cooperativa Minera Poopo R.L.</p><br>
  <p style="color:#FFF;display:inline;"></p><?php $e=App\Models\Empresa::select('*')->where('id',$tornaguia->id_empresa)->first(); echo $e->nombre; ?><br>
  <p style="font-size:12px;display:inline;">{{ $q->nombre }}</p> 
  </td>
  </tr>
  <tr>
  <td style="text-align:center; color: white; background-color: #FFF;; font-size:20px;">
      MEDIO DE TRANSPORTE: 
  </td>
  <td style="text-align:center; color: white; background-color: #FFF;; font-size:20px;">
      TIPO DE MATERIAL:
  </td>
  </tr>
  <tr>
  <td>
  <p style="color:#FFF;;display:inline;">Tipo de Transporte:</p> <?php $t=App\Models\Transporte::select('*')->where('id',$tornaguia->id_transporte)->first(); echo $t->tipo_transporte; ?><p style="color:#FFF;;display:inline;">     Marca:</p>{{ $t->marca }}  <br>
  <p style="color:#FFF;;display:inline;">Color:</p>{{ $t->color }} <p style="color:#FFF;;display:inline;">Placa: </p> {{ $t->placa }} <br>
  <p style="color:#FFF;;display:inline;">Nombre del Chofer:</p> <?php $c=App\Models\Conductor::select('*')->where('id',$tornaguia->id_conductor)->first(); echo $c->nombre; ?><br>
  <p style="display:inline;margin-left:140px;"> {{ $c->no_licencia }}</p> <p style="display:inline;"> </p> <p style="display:inline;margin-left:450px;"> {{ $tornaguia->cuadrilla }}</p> <br><br>
  </td>
  <td>
  <p style="color:#FFF;;display:inline;">   Tipo de Material: </p>@if($tornaguia->tipo_manterial =="broza")  X  @else  Y   @endif  <br>
  <p style="color:#FFF;;display:inline;">    Minerales:</p>{{ $tornaguia->minerales}} <br>
  <p style="color:#FFF;;display:inline;">    Peso en Toneladas:</p>{{ $tornaguia->id_peso }}  <br>
  <p style="color:#FFF;;display:inline;">    Cantidad de Sacos:</p>{{ $tornaguia->sacos }}  <br>
  </td>
  </tr>
  <tr>
  <td colspan=2>
    <table  style="border:none; !important; width:100%">
      <tr>
          <td width="25%">
            <br><br><br>
            <div style="font-size:12px;text-align:center;color:#FFF;;">
                Presidente, Consejo de Administracion<br>
                Sello, Nombre, C.I. y Firma
            </div>
          </td>
          <td width="25%">
            <br><br><br>
            <div style="font-size:12px;text-align:center;color:#FFF;;">
                Empresa Receptora<br>
                Sello, y Firma
            </div>
          </td>
          <td style="width:25%;text-align:center;color:#FFF;;">
          <br><br><br>
          <div style="font-size:12px;">
              Presidente, Consejo de Vigilancia<br>
              Sello, Nombre, C.I. y Firma
           </div>
          </td>
          <td style="width:25%;text-align:center;">
          <div style="font-size:10px;border:0px;">
               
               <img src="data:image/png;base64, {!! $qrcode !!}">
           </div>   
          </td>
      </tr>
    </table>
  </td>
  </tr>
</table>
