<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScientificWorkRequest;
use App\Http\Requests\UpdateScientificWorkRequest;
use App\Models\Area;
use App\Models\Review;
use App\Models\ReviewQuality;
use App\Models\ScientificWork;
use App\Models\Subarea;
use App\Models\User;
use App\Services\SciDataService;

class ScientificWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = ScientificWork::query();

        $scientificworks = $query->paginate(10);

        return inertia("ScientificWorks/Index", [
            'all' => $scientificworks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScientificWorkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $sciWorkIndex, SciDataService $scidata)
    {
        return inertia("ScientificWorks/Show", $scidata->getScientificWorkData($sciWorkIndex));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScientificWork $scientificWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScientificWorkRequest $request, ScientificWork $scientificWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScientificWork $scientificWork)
    {
        //
    }
}
