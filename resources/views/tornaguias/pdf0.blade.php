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
    height: 100%;
    width: 100%;
    /*background-image: url('{{ url('/') }}/img/fondo_tg.png');*/
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

    .divTable
    {
        display:  table;
        width:auto;
        background-color:#eee;
        border:1px solid  #666666;
        border-spacing:5px;/*cellspacing:poor IE support for  this*/
       /* border-collapse:separate;*/
    }

    .divRow
    {
       display:table-row;
       width:auto;
    }

    .divCell
    {
        float:left;/*fix for  buggy browsers*/
        display:table-column;
        width:200px;
        background-color:#ccc;
    }
</style>
<div id="page-body">
<div id="overlay">
</div>
<div id="content">
    <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tornaguias.pdfgen_fields')
                </div>
            </div>
    </div>
</div>
</div>
</div>


