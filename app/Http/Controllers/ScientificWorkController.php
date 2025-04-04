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
    public function show(int $sciWorkIndex)
    {
        $scientificWork = ScientificWork::find($sciWorkIndex);
        $subarea = Subarea::find($scientificWork->subarea_id);
        $area = Area::find($subarea->area_id);
        $reviews = Review::where('scientific_work_id', $scientificWork->id)->get();

        foreach ($reviews as $review) {
            $review->user = User::find($review->user_id)->name;
            unset($review->user_id);

            $reviewQualitys = ReviewQuality::where('review_id', $review->id)->get();
            $sumReviewQuality = 0;
            if ( count($reviewQualitys) ) {
                foreach ($reviewQualitys as $reviewQuality)
                    $sumReviewQuality += $reviewQuality->assessment;
                
                $review->avgQuality = $sumReviewQuality / count($reviewQualitys);
            }
        }

        $data = [
            'title' => $scientificWork->title,
            'author' => User::find($scientificWork->user_id)->name,
            'abstract' => $scientificWork->abstract,
            'keywords' => $scientificWork->keywords,
            'file' => $scientificWork->pdf_url,
            'publishDate' => $scientificWork->publish_date,
            'category' => $area->name . ' / ' . $subarea->name,
            'reviews' => $reviews
        ];

        return inertia("ScientificWorks/Show", $data);
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
