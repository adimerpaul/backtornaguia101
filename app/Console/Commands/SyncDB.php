<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Conductor;
use App\Models\Conductor2;
use App\Models\Contratista;
use App\Models\Contratista2;
use App\Models\Empresa;
use App\Models\Empresa2;
use App\Models\Transporte;
use App\Models\Transporte2;
use App\Models\Tornaguia;
use App\Models\Tornaguia2;

class SyncDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'syncdatabase:remoto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sincroniza la BD remota';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
     //Sincronizacion de Conductores  
		$todos = Conductor::all();
		$todos2 = Conductor2::all();
		
		if(count($todos)>count($todos2)) 
	    { 
          $diferencia = count($todos)-count($todos2);
		  $difer = Conductor::select('*')->latest('created_at')->orderby('created_at','asc')->limit($diferencia)->get();
            foreach($difer as $dif)
            {
                Conductor2::create([
                    'nombre' => $dif->nombre,
                    'contacto' => $dif->contacto,
                    'telefono' => $dif->telefono,
                    'celular' => $dif->celular,
                    'ciudad' => $dif->ciudad,
                    'direccion' => $dif->direccion,
                    'estado' => $dif->estado,
                    'id_usuario'=> 2,
                    'no_licencia' => $dif->no_licencia, ]);
            }
	    }
        else
        {
          $difer = [];
        }

//Sincronizacion de Contratistas 
		$tocon = Contratista::all();
		$tocon2 = Contratista2::all();
		
		if(count($tocon)>count($tocon2)) 
	    { 
          $dif_cont = count($tocon)-count($tocon2);
		  $difer_cont = Contratista::select('*')->latest('created_at')->orderby('created_at','asc')->limit($dif_cont)->get();
            foreach($difer_cont as $difc)
            {
                Contratista2::create([
                    'nombre' => $difc->nombre,
                    'telefono' => $difc->telefono,
                    'celular' => $difc->celular,
                    'direccion' => $difc->direccion,
                    'ci' => $difc->ci,
                    'fecha_socio' => $difc->fecha_socio,
                    'estado' => $difc->estado,
                    'id_usuario'=> 2,
                    'seccion' => $difc->seccion,
                    'cuadrilla' => $difc->cuadrilla,
                     ]);
            }
	    }
        else
        {
          $difer_cont = [];
        }

//Sincronizacion de Empresas 
$toe = Empresa::all();
$toe2 = Empresa2::all();

if(count($toe)>count($toe2)) 
{ 
  $dif_cone = count($toe)-count($toe2);
  $difer_conte = Empresa::select('*')->latest('created_at')->orderby('created_at','asc')->limit($dif_cone)->get();
    foreach($difer_conte as $dife)
    {
        Empresa2::create([
            'nombre' => $dife->nombre,
            'ciudad' => $dife->ciudad,
            'departamento' => $dife->departamento,
            'telefono' => $dife->telefono,
            'logo' => $dife->logo,
            'nit' => $dife->nit,
            'encabezado' => $dife->encabezado,
            'estado' => $dife->estado,
            'id_usuario'=> 2,
             ]);
    }
}
else
{
  $difer_conte = [];
}

//Sincronizacion de Transportes
$tot = Transporte::all();
$tot2 = Transporte2::all();

if(count($tot)>count($tot2)) 
{ 
  $dif_trans = count($tot)-count($tot2);
  $difer_contt = Transporte::select('*')->latest('created_at')->orderby('created_at','asc')->limit($dif_trans)->get();
    foreach($difer_contt as $dift)
    {
        Transporte2::create([
            'tipo_transporte' => $dift->tipo_transporte,
            'marca' => $dift->marca,
            'placa' => $dift->placa,
            'color' => $dift->color,
            'estado' => $dift->estado,
            'id_usuario'=> 2,
             ]);
    }
}
else
{
  $difer_contt = [];
}

//Sincronizacion de Tornaguias
$tor = Tornaguia::all();
$tor2 = Tornaguia2::all();

if(count($tor)>count($tor2)) 
{ 
  $dif_tor = count($tor)-count($tor2);
  $difer_torna = Tornaguia::select('*')->latest('created_at')->orderby('created_at','asc')->limit($dif_tor)->get();
    foreach($difer_torna as $difr)
    {
        Tornaguia2::create([
            'id_empresa' => $difr->id_empresa,
            'yacimiento' => $difr->yacimiento,
            'cantidad' => $difr->cantidad,
            'minerales' => $difr->minerales,
            'id_municipio' => 1,
            'tipo_manterial' => $difr->tipo_manterial,
            'id_transporte' => $difr->id_transporte,
            'id_conductor' => $difr->id_conductor,
            'autorizadopor' => $difr->autorizadopor,
            'id_contratista' => $difr->id_contratista,
            'tranca' => $difr->tranca,
            'peso' => $difr->peso,
            'sacos' => $difr->sacos,
            'estado' => $difr->estado,
            'id_usuario'=> 2,
            'no_tornaguia' => $difr->no_tornaguia,
            'fecha_tornaguia' => $difr->fecha_tornaguia
             ]);
    }
}
else
{
  $difer_contt = [];
}

      //return ($mensaje);
        return 0;
    }
}
