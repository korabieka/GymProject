<?php

namespace App\Repositories;

use App\Models\Workout;
use InfyOm\Generator\Common\BaseRepository;

class WorkoutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'content',
        'time',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Workout::class;
    }
}
