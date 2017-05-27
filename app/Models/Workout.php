<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Workout
 * @package App\Models
 * @version February 18, 2017, 4:09 am UTC
 */
class Workout extends Model
{
    use SoftDeletes;

    public $table = 'workouts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'content',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'content' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dietWorkouts()
    {
        return $this->hasMany(\App\Models\DietWorkout::class);
    }
    public function workoutsDetails(){
        return $this->hasMany(\App\Models\WorkoutDetail::class);
    }
}
