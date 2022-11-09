<style>
  td {
    border: 1px solid #72a89c;
    font-family:Arial;

  }
</style>
<table style="width:100%;">
  <tr>
    <td width="20%" style="text-align:center;">
      <img src="{{ url('/') }}/img/logo-1.jpg">
    </td>
    <td width="60%" style="text-align:center;">
      <div style="font-size:24px;text-align:center;font-weight:600;color:#72a89c;">
        Cooperativa Minera "POOPO" R.L.<br>
        <div style="font-size:12px;text-align:center;font-weight:400;color:#72a89c;">
            Personaría Jurídica No. 487 - Ficha de Registro No.464. NIT 1023457027<br>
            Cel. 72318861- 71852849 - 72467605 - 71101685 <br>
            Poopo - Oruro - Bolivia
        </div>
      </td>
      <td width="20%" style="text-align:center;">
        <img src="{{ url('/') }}/img/cooperativa.png" style="width:35%">
      </td>
  </tr>
  <tr>
    <td colspan=3>
      <div style="text-align:center;font-size:30px;color:#72a89c;background-color:#e4ebf5;font-weight:700;font-family: Arial;"
      >TORNAGUIA O CARTA PORTE</div>
    </td>
  </tr>
</table>
<table style="width:100%;">
  <tr>
  <td>
      <p style="color:#639f93;display:inline;">Fecha:</p> {{$tornaguia->created_at->format('d-m-Y')}} 
  </td>
  <td>
  <p style="color:#639f93;display:inline;">No:</p><p style="color:red;display:inline;">  000{{$tornaguia->no_tornaguia}} </p>
  </td>
  </tr>
  <tr>
  <td style="text-align:center; color: white; background-color: #639f93; font-size:20px;">
      PROCEDENCIA: 
  </td>
  <td style="text-align:center; color: white; background-color: #639f93; font-size:20px;">
      PROPIETARIO DEL MINERAL:
  </td>
  </tr>
  <tr>
  <td>
  <p style="color:#639f93;display:inline;">Departamento:  Oruro&nbsp;&nbsp;&nbsp;Municipio: Poopó</p><br>
  <p style="color:#639f93;display:inline;">Yacimiento:</p>{{ $tornaguia->yacimiento }}<?php $q=App\Models\Contratista::select('*')->where('id',$tornaguia->id_contratista)->first();// echo $q->seccion; ?><br>
  <p style="color:#639f93;display:inline;">Tranca de Control:</p> {{ $tornaguia->tranca }}
  </td>
  <td>
  <p style="color:#639f93;display:inline;text-align:center;">Cooperativa Minera Poopo R.L.</p><br>
  <p style="color:#639f93;display:inline;">Destino: Empresa </p><?php $e=App\Models\Empresa::select('*')->where('id',$tornaguia->id_empresa)->first(); echo $e->nombre; ?><br>
  <p style="color:#639f93;display:inline;">Contratista: </p>{{ $q->nombre }} 
  </td>
  </tr>
  <tr>
  <td style="text-align:center; color: white; background-color: #639f93; font-size:20px;">
      MEDIO DE TRANSPORTE: 
  </td>
  <td style="text-align:center; color: white; background-color: #639f93; font-size:20px;">
      TIPO DE MATERIAL:
  </td>
  </tr>
  <tr>
  <td>
  <p style="color:#639f93;display:inline;">Tipo de Transporte:</p> <?php $t=App\Models\Transporte::select('*')->where('id',$tornaguia->id_transporte)->first(); echo $t->tipo_transporte; ?><p style="color:#639f93;display:inline;">     Marca:</p>{{ $t->marca }}  <br>
  <p style="color:#639f93;display:inline;">Color:</p>{{ $t->color }} <p style="color:#639f93;display:inline;">Placa: </p> {{ $t->placa }} <br>
  <p style="color:#639f93;display:inline;">Nombre del Chofer:</p> <?php $c=App\Models\Conductor::select('*')->where('id',$tornaguia->id_conductor)->first(); echo $c->nombre; ?><br>
  <p style="color:#639f93;display:inline;">C.I.</p> {{ $c->no_licencia }} <br>
  </td>
  <td>
  <p style="color:#639f93;display:inline;">   Tipo de Material: </p>{{ $tornaguia->tipo_manterial }}  <br>
  <p style="color:#639f93;display:inline;">    Minerales:</p>{{ $tornaguia->minerales}} <br>
  <p style="color:#639f93;display:inline;">    Peso en Toneladas:</p>{{ $tornaguia->id_peso }}  <br>
  <p style="color:#639f93;display:inline;">    Cantidad de Sacos:</p>{{ $tornaguia->sacos }}  <br>
  <p style="color:#639f93;display:inline;">    No. de Lote:</p> <br> 
  </td>
  </tr>
  <tr>
  <td colspan=2>
    <table  style="border:none; !important; width:100%">
      <tr>
          <td width="25%">
            <br><br><br>
            <div style="font-size:12px;text-align:center;color:#639f93;">
                Presidente, Consejo de Administracion<br>
                Sello, Nombre, C.I. y Firma
            </div>
          </td>
          <td width="25%">
            <br><br><br>
            <div style="font-size:12px;text-align:center;color:#639f93;">
                Empresa Receptora<br>
                Sello, y Firma
            </div>
          </td>
          <td style="width:25%;text-align:center;color:#639f93;">
          <br><br><br>
          <div style="font-size:12px;">
              Presidente, Consejo de Vigilancia<br>
              Sello, Nombre, C.I. y Firma
           </div>
          </td>
          <td style="width:25%;text-align:center;">
          <div style="font-size:10px;border:0px;">
               {{--!! QrCode::size(100)->generate(Request::url()); !!--}}
               <?php   $url = 'http://tornaguias.pragmaticsol.com/torna_view/'.$tornaguia->no_tornaguia;
                       $qrcode = base64_encode(QrCode::format('svg')->size(100)->generate($url)); ?>
               
               {{!! QrCode::size(100)->generate($url); !!}}
         
           </div>   
          </td>
      </tr>
    </table>
  </td>
  </tr>
</table>
