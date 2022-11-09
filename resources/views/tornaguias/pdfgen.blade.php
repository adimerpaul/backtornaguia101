<style>
   @page {
    size: A4 portrait;
    margin-top:0.5cm;
    margin-bottom:0;
    margin-left:0;
    margin-right:0;
    padding: 0;
  }
  body {
    font-family: helvetica !important;
    font-size: 14pt;
    position: relative;
  }
  #overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-image: url('{{ url('/') }}/img/fondo_tg.png');
    background-position: center top;
    background-repeat: no-repeat;
    z-index: -1;
}
  #content{
    padding: 3.5cm 0.50cm 1.00cm 0.50cm;
  }
  #postal-address {
      margin: 0cm;
      margin-left: 1.50cm;
      margin-top: 0.00cm;
      margin-bottom: 1.00cm;
      font-size: 10pt;
  }
  #date {
    font-weight: bold;
  }

  td {
    border: 0px solid #FFF;
    font-family:Arial;

  }
</style>

<div id="page-body">
<div id="overlay">

<table style="width:100%;margin-top:125px;">
  <tr>
    <td width="20%" style="text-align:center;">
      <br>
    </td>
    <td width="60%" style="text-align:center;">
      <div style="font-size:24px;text-align:center;font-weight:600;color:#FFF;">
        <br>
        <div style="font-size:12px;text-align:center;font-weight:400;color:#FFF;">
            <br>
            <br>
            <br>
        </div>
      </td>
      <td width="20%" style="text-align:center;">
        <br>
      </td>
  </tr>
  <tr>
    <td colspan=3>
      <div style="text-align:center;font-size:30px;color:#FFF;font-weight:700;font-family: Arial;">
      <br></div>
    </td>
  </tr>
</table>
<table style="width:100%;">
  <tr>
  <td>
      <p style="color:#FFF;;display:inline;margin-left:150px;"> </p> {{$tornaguia->fecha_tornaguia}} 
  </td>
  <td>
  <p style="color:#FFF;;display:inline;"></p><p style="color:red;display:inline;margin-left:260px;">No. 000{{$tornaguia->no_tornaguia}} </p>
  </td>
  </tr>
  <tr>
  <td style="text-align:center; color: white; font-size:20px;">
      <br>
  </td>
  <td style="text-align:center; color: white; font-size:20px;">
      <br>
  </td>
  </tr>
  <?php $q=App\Models\Contratista::select('*')->where('id',$tornaguia->id_contratista)->first();?>
  <tr>
  <td>
  <p style="color:#FFF;display:inline;"><br><br></p><br>
  <p style="display:inline;margin-left:150px;">{{ $tornaguia->yacimiento }}</p><br><br>
  <p style="display:inline;margin-left:200px;">{{ $tornaguia->tranca }}</p> 
  </td>
  <?php $e=App\Models\Empresa::select('*')->where('id',$tornaguia->id_empresa)->first();?>
  <td>
  <p style="color:#FFF;;display:inline;text-align:center;"><br></p><br><br>
  <p style="display:inline;margin-left:150px;">Empresa <?php echo $e->nombre; ?></p><br><br>
  <p style="display:inline;margin-left:130px;font-size:12px;">{{ $q->nombre }}</p> 
  </td>
  </tr>
  <tr>
  <td style="text-align:center; color: white; font-size:20px;">
      <br>
  </td>
  <td style="text-align:center; color: white; font-size:20px;">
      <br><br>
  </td>
  </tr>
  <?php $t=App\Models\Transporte::select('*')->where('id',$tornaguia->id_transporte)->first();?>
  <?php $c=App\Models\Conductor::select('*')->where('id',$tornaguia->id_conductor)->first();?>
  <tr>
  <td colspan="2">
  <div style="margin-top:-10px;">&nbsp;</div>
  <p style="display:inline;margin-left:140px;"><?php echo $t->tipo_transporte; ?></p><p style=";display:inline;margin-left:60px;">{{ $t->marca }}</p> <p style="display:inline;margin-left:175px;"> @if($tornaguia->tipo_manterial) X @endif</p><br><br>
  <p style="display:inline;margin-left:140px;">{{ $t->color }}</p> <p style="display:inline;margin-left:60px;"> {{ $t->placa }}</p> <p style="display:inline;margin-left:175px;"> &nbsp;{{ $tornaguia->peso }} </p> <br><br>
  <p style="display:inline;margin-left:200px;font-size:14px;"><?php echo $c->nombre; ?></p><p style="display:inline;margin-left:200px;"> {{ $tornaguia->sacos }}</p><br><br>
  <p style="display:inline;margin-left:140px;"> {{ $c->no_licencia }}</p> <p style="display:inline;"> </p> <p style="display:inline;margin-left:300px;"> {{ $tornaguia->cuadrilla }}</p> <br><br>

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
</div>
</div>