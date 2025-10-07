<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MasterController;

Route::get('/{slug}', [HomeController::class, 'invitation']);
Route::controller(HomeController::class)->prefix('home')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/post-feedback', 'postFeedback')->name('home.post-feedback');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(MasterController::class)->prefix('master')->group(function () {
        Route::get('/', 'index')->name('master');
        Route::post('/post-create', 'postcreate')->name('master.post-create');
    });
});

require __DIR__.'/auth.php';
