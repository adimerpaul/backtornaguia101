<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa
 * @package App\Models
 * @version March 25, 2021, 10:44 pm UTC
 *
 * @property string $nombre
 * @property string $ciudad
 * @property string $departamento
 * @property string $telefono
 * @property string $logo
 * @property string $nit
 * @property string $encabezado
 * @property integer $estado
 * @property integer $id_usuario
 */
class Empresa extends Model
{
  //  use SoftDeletes;

    public $table = 'empresas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'ciudad',
        'departamento',
        'telefono',
        'logo',
        'nit',
        'encabezado',
        'estado',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'ciudad' => 'string',
        'departamento' => 'string',
        'telefono' => 'string',
        'logo' => 'string',
        'nit' => 'string',
        'encabezado' => 'string',
        'estado' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:30',
        'ciudad' => 'nullable|string|max:25',
        'departamento' => 'nullable|string|max:12',
        'telefono' => 'nullable|string|max:15',
        'logo' => 'nullable|string|max:30',
        'nit' => 'nullable|string|max:15',
        'encabezado' => 'nullable|string|max:50',
        'estado' => 'nullable|integer',
        'id_usuario' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
