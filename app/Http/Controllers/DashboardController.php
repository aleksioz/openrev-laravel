<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScientificWork;
use App\Models\Review;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $topSciWorks = [];
        $popWorks = Review::select('scientific_work_id')
            ->selectRaw('SUM(assessment) as total_assessment')
            ->groupBy('scientific_work_id')
            ->orderByDesc('total_assessment')
            ->limit(3)
            ->get();

        foreach ($popWorks as $popWork) {
            $scientificWork = ScientificWork::find($popWork->scientific_work_id);
            $topSciWorks[] = $scientificWork;
        }
        

        $recentWorks = ScientificWork::query()
                ->orderByDesc('publish_date')
                ->limit(3)
                ->get();
                
        return inertia("Dashboard", [
            'topWorks' => $topSciWorks,
            'recentWorks' => $recentWorks,
        ]);
    }
}
