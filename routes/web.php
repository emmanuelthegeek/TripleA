<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
// This is the route to the homepage of the application
Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['jwt.auth'])->name('dashboard'); // Jwt middleware to check for tokens before accessing the dashboard.

Route::middleware(['role:1,2'])->group(function () { // This middleware checks for the user's authorization
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


