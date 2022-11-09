<?php

namespace App\Repositories;

use App\Models\Conductor;
use App\Repositories\BaseRepository;

/**
 * Class ConductorRepository
 * @package App\Repositories
 * @version March 25, 2021, 10:45 pm UTC
*/

class ConductorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'contacto',
        'telefono',
        'celular',
        'ciudad',
        'direccion',
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
        return Conductor::class;
    }
}
