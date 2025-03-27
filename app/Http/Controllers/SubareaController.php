<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubareaRequest;
use App\Http\Requests\UpdateSubareaRequest;
use App\Models\ScientificWork;
use App\Models\User;
use App\Models\Subarea;

class SubareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSubareaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subarea $subarea)
    {

        $scientificWorks = ScientificWork::query()->where('subarea_id', $subarea->id);
        $scientificWorks = $scientificWorks->paginate(10);

        foreach ($scientificWorks as $scientificWork) {
            $scientificWork->author = User::find($scientificWork->user_id)->name;
            unset($scientificWork->user_id);
            $scientificWork->info = $scientificWork->publish_date;
        }


        return inertia("Subareas/Index", [
            'subarea' => $subarea,
            'all' => $scientificWorks, 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subarea $subarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubareaRequest $request, Subarea $subarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subarea $subarea)
    {
        //
    }
}
