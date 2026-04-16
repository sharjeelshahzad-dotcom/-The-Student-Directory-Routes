<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController; // Aap ka naya Student Controller
use Illuminate\Support\Facades\Route;

// ==========================================
// AAP KI ASSIGNMENT 1 KE ROUTES
// ==========================================

// 1. Homepage ka route (Purane 'welcome' view ko replace kar diya)
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. All Students List ka route
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// 3. Dynamic Student Profile
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');


// ==========================================
// ACTIVITY 2 (BREEZE) KE ROUTES - INKO CHHERNA NAHI
// ==========================================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';