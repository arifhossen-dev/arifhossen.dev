<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/portfolio', [HomeController::class,'portfolio'])->name('portfolio');
Route::get('/posts/{post}', [HomeController::class,'show'])->name('posts.show');

Route::middleware(['auth','verified'])
    ->prefix('molla')
    ->name('molla.')
    ->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('/posts', PostController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
