<?php

namespace App\Repositories;

use App\Models\Contratista;
use App\Repositories\BaseRepository;

/**
 * Class ContratistaRepository
 * @package App\Repositories
 * @version April 26, 2021, 6:27 pm UTC
*/

class ContratistaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'telefono',
        'celular',
        'direccion',
        'ci',
        'fecha_socio',
        'estado',
        'id_usuario'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contratista::class;
    }
}
