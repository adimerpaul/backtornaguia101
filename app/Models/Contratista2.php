<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contratista
 * @package App\Models
 * @version April 26, 2021, 6:27 pm UTC
 *
 * @property string $nombre
 * @property string $telefono
 * @property string $celular
 * @property string $direccion
 * @property string $ci
 * @property string $fecha_socio
 * @property integer $estado
 * @property integer $id_usuario
 */
class Contratista2 extends Model
{
  //  use SoftDeletes;
    protected $connection = 'pgsql2';

    public $table = 'contratistas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'telefono',
        'celular',
        'direccion',
        'ci',
        'fecha_socio',
        'estado',
        'id_usuario', 
        'seccion',
        'cuadrilla'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'telefono' => 'string',
        'celular' => 'string',
        'direccion' => 'string',
        'ci' => 'string',
        'fecha_socio' => 'date',
        'estado' => 'integer',
        'id_usuario' => 'integer',
        'seccion' => 'string',
        'cuadrilla' => 'cuadrilla'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:50',
        'telefono' => 'nullable|string|max:12',
        'celular' => 'nullable|string|max:12',
        'direccion' => 'nullable|string|max:25',
        'ci' => 'nullable|string|max:12',
        'fecha_socio' => 'nullable',
        'estado' => 'nullable|integer',
        'id_usuario' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'seccion' => 'nullable',
        'cuadrilla' => 'nullable'
    ];

    
}
