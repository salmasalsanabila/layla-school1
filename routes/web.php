<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

 Route::get('/login', [DashboardController::class, 'index'])->name('dashboard');
 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/about', [AboutController::class, 'index'])->name('about');
 Route::get('/academic', [AcademicController::class, 'index'])->name('academic');
 Route::get('/facilities', [FacilitiesController::class, 'index'])->name('facilities');
 Route::get('/student', [StudentController::class, 'index'])->name('student');
 Route::get('/information', [InformationController::class, 'index'])->name('information');
 Route::get('/contact', [ContactController::class, 'index'])->name('contact');
 Route::get('/news-library', [NewsController::class, 'library']);
 Route::get('/news-fair', [NewsController::class, 'fair']);
 Route::get('/news-art', [NewsController::class, 'art']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
