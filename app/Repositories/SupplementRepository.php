<?php

namespace App\Repositories;

use App\Models\Supplement;
use InfyOm\Generator\Common\BaseRepository;

class SupplementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'description',
        'thumb'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Supplement::class;
    }
}
