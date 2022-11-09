<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version March 26, 2021, 12:05 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $tipo_usuario
 * @property string $nombres
 * @property string $apellidos
 * @property string $fecha_nacimiento
 * @property string $telefono
 * @property string $celular
 * @property string $foto_perfil
 * @property integer $estado
 * @property integer $id_usuario
 * @property string $remember_token
 */
class User extends Model
{
    //use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'tipo_usuario',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'telefono',
        'celular',
        'foto_perfil',
        'estado',
        'id_usuario',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'tipo_usuario' => 'string',
        'nombres' => 'string',
        'apellidos' => 'string',
        'fecha_nacimiento' => 'date',
        'telefono' => 'string',
        'celular' => 'string',
        'foto_perfil' => 'string',
        'estado' => 'integer',
        'id_usuario' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'tipo_usuario' => 'nullable|string|max:10',
        'nombres' => 'nullable|string|max:30',
        'apellidos' => 'nullable|string|max:30',
        'fecha_nacimiento' => 'nullable',
        'telefono' => 'nullable|string|max:15',
        'celular' => 'nullable|string|max:15',
        'foto_perfil' => 'nullable|string|max:30',
        'estado' => 'nullable|integer',
        'id_usuario' => 'nullable|integer',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
