<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transporte
 * @package App\Models
 * @version March 25, 2021, 10:45 pm UTC
 *
 * @property string $tipo_transporte
 * @property string $marca
 * @property string $placa
 * @property string $color
 * @property integer $estado
 * @property integer $id_usuario
 */
class Transporte2 extends Model
{
 //   use SoftDeletes;
    protected $connection = 'pgsql2';

    public $table = 'transportes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipo_transporte',
        'marca',
        'placa',
        'color',
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
        'tipo_transporte' => 'string',
        'marca' => 'string',
        'placa' => 'string',
        'color' => 'string',
        'estado' => 'integer',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_transporte' => 'required|string|max:18',
        'marca' => 'nullable|string|max:25',
        'placa' => 'nullable|string|max:12',
        'color' => 'nullable|string|max:20',
        'estado' => 'nullable|integer',
        'id_usuario' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
