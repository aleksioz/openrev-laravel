<?php

namespace App\Http\Controllers;

use App\Models\ScientificWork;
use App\Models\Review;
use App\Models\User;

class BrowseController extends Controller
{
    public function orderedWorks()
    {
        $topSciWorks = [];
        $popWorks = Review::select('scientific_work_id')
            ->selectRaw('SUM(assessment) as total_assessment')
            ->groupBy('scientific_work_id')
            ->orderByDesc('total_assessment')
            ->limit(12)
            ->get();

        foreach ($popWorks as $popWork) {
            $scientificWork = ScientificWork::find($popWork->scientific_work_id);
            $topSciWorks[] = $scientificWork;
        }

        return inertia("Browse", [
            'type' => 'work',
            'title' => 'Top Scientific Works', 
            'data' => $topSciWorks
        ]);
    }

    public function topReviewers()
    {
        $allReviewers = [];
        $topReviewers = Review::select('user_id')
            ->selectRaw('COUNT(*) as total_reviews')
            ->groupBy('user_id')
            ->orderByDesc('total_reviews')
            ->limit(10)
            ->get();
        
        foreach ($topReviewers as $topReviewer) {
            $user = User::find($topReviewer->user_id);
            $user->info_title = 'Total Reviews';
            $user->info = $topReviewer->total_reviews;
            $allReviewers[] = $user;
        }

        // dd($allReviewers);

        return inertia("Browse", [
            'type' => 'user',
            'title' => 'Top Scientific Works', 
            'data' => $allReviewers
        ]);
    }

    public function topAuthors()
    {
        $allAuthors = [];
        $topAuthors = ScientificWork::select('scientific_works.user_id as author_id')
            ->selectRaw('COUNT(*) as total_assessment')
            ->selectRaw('SUM(reviews.assessment) as total_assessment')
            ->join('reviews', 'scientific_works.id', '=', 'reviews.scientific_work_id')
            ->groupBy('author_id')
            ->orderByDesc('total_assessment')
            ->limit(10)
            ->get();

        foreach ($topAuthors as $topAuthor) {
            $author = User::find($topAuthor->author_id);
            $author->info_title = 'Total Assessments';
            $author->info = $topAuthor->total_assessment;
            $allAuthors[] = $author;
        }

        return inertia("Browse", [
            'type' => 'user',
            'title' => 'Top Authors', 
            'data' => $allAuthors
        ]);
    }
}
