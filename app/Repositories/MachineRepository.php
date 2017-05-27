<?php

namespace App\Repositories;

use App\Models\Machine;
use InfyOm\Generator\Common\BaseRepository;

class MachineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'thumb'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Machine::class;
    }
}
