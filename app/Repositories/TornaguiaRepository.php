<?php

namespace App\Repositories;

use App\Models\Tornaguia;
use App\Repositories\BaseRepository;

/**
 * Class TornaguiaRepository
 * @package App\Repositories
 * @version March 25, 2021, 10:43 pm UTC
*/

class TornaguiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_empresa',
        'yacimiento',
        'destino',
        'contratista',
        'cantidad',
        'minerales',
        'id_municipio',
        'tipo_manterial',
        'id_transporte',
        'id_conductor',
        'autorizadopor',
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
        return Tornaguia::class;
    }
}
