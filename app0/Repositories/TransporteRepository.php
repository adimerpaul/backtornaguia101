<?php

namespace App\Repositories;

use App\Models\Transporte;
use App\Repositories\BaseRepository;

/**
 * Class TransporteRepository
 * @package App\Repositories
 * @version March 25, 2021, 10:45 pm UTC
*/

class TransporteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_transporte',
        'marca',
        'placa',
        'color',
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
        return Transporte::class;
    }
}
