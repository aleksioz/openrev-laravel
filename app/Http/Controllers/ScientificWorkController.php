<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScientificWorkRequest;
use App\Http\Requests\UpdateScientificWorkRequest;
use App\Models\ScientificWork;

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
    public function show(ScientificWork $scientificWork)
    {
        
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
