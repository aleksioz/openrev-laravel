<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubareaRequest;
use App\Http\Requests\UpdateSubareaRequest;
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
        return inertia("Subareas/Index", [
            'subarea' => $subarea
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
