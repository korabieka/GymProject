<?php

namespace App\Repositories;

use App\Models\Diet;
use InfyOm\Generator\Common\BaseRepository;

class DietRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'content',
        'time',
        'thumb'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Diet::class;
    }
}
