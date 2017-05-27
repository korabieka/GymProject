<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkoutRequest;
use App\Http\Requests\UpdateWorkoutRequest;
use App\Repositories\WorkoutRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Workout;
use App\Models\WorkoutsDetail;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class WorkoutController extends AppBaseController
{
    /** @var  WorkoutRepository */
    private $workoutRepository;

    public function __construct(WorkoutRepository $workoutRepo)
    {
        $this->workoutRepository = $workoutRepo;
    }

    /**
     * Display a listing of the Workout.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $workouts = Workout::all();
        // var_dump($workouts);die;
        return view('workout',array('workouts' => $workouts));
    }

    /**
     * Show the form for creating a new Workout.
     *
     * @return Response
     */
    public function create()
    {
        return view('workouts.create');
    }

    /**
     * Store a newly created Workout in storage.
     *
     * @param CreateWorkoutRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkoutRequest $request)
    {
        $input = $request->all();

        $workout = $this->workoutRepository->create($input);

        Flash::success('Workout saved successfully.');

        return redirect(route('workouts.index'));
    }

    /**
     * Display the specified Workout.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workout = $this->workoutRepository->findWithoutFail($id);

        if (empty($workout)) {
            Flash::error('Workout not found');

            return redirect(route('workouts.index'));
        }

        return view('workouts.show')->with('workout', $workout);
    }

    /**
     * Show the form for editing the specified Workout.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workout = $this->workoutRepository->findWithoutFail($id);

        if (empty($workout)) {
            Flash::error('Workout not found');

            return redirect(route('workouts.index'));
        }

        return view('workouts.edit')->with('workout', $workout);
    }

    /**
     * Update the specified Workout in storage.
     *
     * @param  int              $id
     * @param UpdateWorkoutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkoutRequest $request)
    {
        $workout = $this->workoutRepository->findWithoutFail($id);

        if (empty($workout)) {
            Flash::error('Workout not found');

            return redirect(route('workouts.index'));
        }

        $workout = $this->workoutRepository->update($request->all(), $id);

        Flash::success('Workout updated successfully.');

        return redirect(route('workouts.index'));
    }

    /**
     * Remove the specified Workout from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workout = $this->workoutRepository->findWithoutFail($id);

        if (empty($workout)) {
            Flash::error('Workout not found');

            return redirect(route('workouts.index'));
        }

        $this->workoutRepository->delete($id);

        Flash::success('Workout deleted successfully.');

        return redirect(route('workouts.index'));
    }

    public function workoutDetails($id){
        $workout_details = WorkoutsDetail::where('workout_id',$id)->get();
        // var_dump($workout_details);die;
        return view('workout_details',array('workout_details' => $workout_details));
    }
}
