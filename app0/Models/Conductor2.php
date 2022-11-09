<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Conductor
 * @package App\Models
 * @version March 25, 2021, 10:45 pm UTC
 *
 * @property string $nombre
 * @property string $contacto
 * @property string $telefono
 * @property string $celular
 * @property string $ciudad
 * @property string $direccion
 * @property integer $estado
 * @property integer $id_usuario
 */
class Conductor2 extends Model
{
  //  use SoftDeletes;
    protected $connection = 'pgsql2';
    public $table = 'conductors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'contacto',
        'telefono',
        'celular',
        'ciudad',
        'direccion',
        'estado',
        'id_usuario',
        'no_licencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'contacto' => 'string',
        'telefono' => 'string',
        'celular' => 'string',
        'ciudad' => 'string',
        'direccion' => 'string',
        'estado' => 'integer',
        'id_usuario' => 'integer',
        'no_licencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:50',
        'contacto' => 'nullable|string|max:40',
        'telefono' => 'nullable|string|max:12',
        'celular' => 'nullable|string|max:12',
        'ciudad' => 'required|string|max:12',
        'direccion' => 'nullable|string|max:25',
        'estado' => 'nullable|integer',
        'id_usuario' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'no_licencia' => 'nullable|string|max:15'
    ];

    
}
