<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Workout
 * @package App\Models
 * @version February 18, 2017, 4:09 am UTC
 */
class WorkoutsDetail extends Model
{

    public $table = 'workouts_details';
    

    public $fillable = [
        'workout_id',
        'name',
        'count',
        'sets'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'count' => 'string',
        'sets' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

}
