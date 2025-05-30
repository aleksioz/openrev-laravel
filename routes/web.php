<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScientificWorkController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\SubareaController;
use App\Http\Controllers\ReviewQualityController;
use App\Models\ReviewQuality;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BrowseController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::redirect('/', '/dashboard');

// Always available
Route::get('/ordered-works', [BrowseController::class, 'orderedWorks'])->name('ordered-works');
Route::get('/top-reviewers', [BrowseController::class, 'topReviewers'])->name('top-reviewers');
Route::get('/top-authors', [BrowseController::class, 'topAuthors'])->name('top-authors');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function() {
    // Route::get('/dashboard', fn() =>  Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('scientificwork', ScientificWorkController::class);
    Route::resource('area', AreaController::class);
    Route::resource('subarea', SubareaController::class);
    Route::resource('reviewquality', ReviewQualityController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
