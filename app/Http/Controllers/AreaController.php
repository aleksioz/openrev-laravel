<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAreaRequest;
use App\Http\Requests\UpdateAreaRequest;
use App\Models\Area;
use App\Models\ScientificWork;
use App\Models\Subarea;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Area::query();

        $areas = $query->paginate(10);

        return inertia("Areas/Index", [
            'all' => $areas
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
    public function store(StoreAreaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {

        $subareas = Subarea::query()->where('area_id', $area->id);

        $query = ScientificWork::query()->whereIn('subarea_id', $subareas->pluck('id'));

        $scientificWorks = $query->paginate(10);

        return inertia("Areas/Index", [
            'area' => $area,
            'all' => $scientificWorks,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAreaRequest $request, Area $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        //
    }
}
