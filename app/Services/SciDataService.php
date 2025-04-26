<?php 

namespace App\Services;

use App\Models\Area;
use App\Models\Review;
use App\Models\ReviewQuality;
use App\Models\ScientificWork;
use App\Models\Subarea;
use App\Models\User;

class SciDataService
{
	public function getScientificWorkData($sciWorkIndex)
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

        return [
            'title' => $scientificWork->title,
            'author' => User::find($scientificWork->user_id)->name,
            'abstract' => $scientificWork->abstract,
            'keywords' => $scientificWork->keywords,
            'file' => $scientificWork->pdf_url,
            'publishDate' => $scientificWork->publish_date,
            'category' => $area->name . ' / ' . $subarea->name,
            'reviews' => $reviews
        ];
	}
}