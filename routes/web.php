<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    // Show the profile page
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    
    // Show the profile edit form
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Update profile information
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    
    // Delete the profile
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
