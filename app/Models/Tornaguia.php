<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tornaguia
 * @package App\Models
 * @version March 25, 2021, 10:43 pm UTC
 *
 * @property integer $id_empresa
 * @property string $yacimiento
 * @property string $destino
 * @property string $contratista
 * @property integer $cantidad
 * @property string $minerales
 * @property integer $id_municipio
 * @property string $tipo_manterial
 * @property integer $id_transporte
 * @property integer $id_conductor
 * @property string $autorizadopor
 * @property integer $estado
 * @property integer $id_usuario
 */
class Tornaguia extends Model
{
    //use SoftDeletes;

    public $table = 'tornaguias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_empresa',
        'yacimiento',
        'id_contratista',
        'cantidad',
        'minerales',
        'id_municipio',
        'tipo_manterial',
        'id_transporte',
        'id_conductor',
        'autorizadopor',
        'estado',
        'id_usuario',
        'tranca',
        'sacos',
        'peso',
        'no_tornaguia',
        'fecha_tornaguia',
        'cuadrilla'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_empresa' => 'integer',
        'yacimiento' => 'string',
        'tranca' => 'string',
        'id_contratista' => 'integer',
        'cantidad' => 'integer',
        'minerales' => 'string',
        'id_municipio' => 'integer',
        'tipo_manterial' => 'string',
        'id_transporte' => 'integer',
        'id_conductor' => 'integer',
        'autorizadopor' => 'string',
        'estado' => 'integer',
        'id_usuario' => 'integer',
        'sacos' => 'integer',
        'peso' => 'integer',
        'no_tornaguia' => 'integer',
        'fecha_tornaguia' => 'date',
        'cuadrilla' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empresa' => 'nullable|integer|required',
        'yacimiento' => 'nullable|string|max:30',
        'tranca' => 'nullable|string|max:25',
        'id_contratista' => 'nullable|integer|required',
        'cantidad' => 'nullable|integer',
        'minerales' => 'nullable|string|max:20',
        'id_municipio' => 'nullable|integer',
        'tipo_manterial' => 'nullable|string|max:15',
        'id_transporte' => 'nullable|integer|required',
        'id_conductor' => 'nullable|integer|required',
        'autorizadopor' => 'nullable|string|max:15',
        'estado' => 'nullable|integer',
        'id_usuario' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'peso' => 'nullable|integer',
        'sacos' => 'nullable|integer',
        'no_tornaguia' => 'nullable|integer|required',
        'fecha_tornaguia' => 'nullable|required',
        'cuadrilla' => 'nullable|string',
    ];

    
}
