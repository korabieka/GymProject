<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDietRequest;
use App\Http\Requests\UpdateDietRequest;
use App\Repositories\DietRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Diet;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DietController extends AppBaseController
{
    /** @var  DietRepository */
    private $dietRepository;

    public function __construct(DietRepository $dietRepo)
    {
        $this->dietRepository = $dietRepo;
    }

    /**
     * Display a listing of the Diet.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $diets = Diet::all();
        return view('diet',array('diets' => $diets));
    }

    /**
     * Show the form for creating a new Diet.
     *
     * @return Response
     */
    public function create()
    {
        return view('diets.create');
    }

    /**
     * Store a newly created Diet in storage.
     *
     * @param CreateDietRequest $request
     *
     * @return Response
     */
    public function store(CreateDietRequest $request)
    {
        $input = $request->all();

        $diet = $this->dietRepository->storeDiet($input);

        Flash::success('Diet saved successfully.');

        return redirect(route('diets.index'));
    }

    /**
     * Display the specified Diet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diet = $this->dietRepository->findWithoutFail($id);
        // var_dump($diet);die;
        return view('diet_detail')->with('diet', $diet);
    }

    /**
     * Show the form for editing the specified Diet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diet = $this->dietRepository->findWithoutFail($id);

        if (empty($diet)) {
            Flash::error('Diet not found');

            return redirect(route('diets.index'));
        }

        return view('diets.edit')->with('diet', $diet);
    }

    /**
     * Update the specified Diet in storage.
     *
     * @param  int              $id
     * @param UpdateDietRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDietRequest $request)
    {
        $diet = $this->dietRepository->findWithoutFail($id);

        if (empty($diet)) {
            Flash::error('Diet not found');

            return redirect(route('diets.index'));
        }

        $diet = $this->dietRepository->update($request->all(), $id);

        Flash::success('Diet updated successfully.');

        return redirect(route('diets.index'));
    }

    /**
     * Remove the specified Diet from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diet = $this->dietRepository->findWithoutFail($id);

        if (empty($diet)) {
            Flash::error('Diet not found');

            return redirect(route('diets.index'));
        }

        $this->dietRepository->delete($id);

        Flash::success('Diet deleted successfully.');

        return redirect(route('diets.index'));
    }
}
