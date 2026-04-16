<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController; 
use Illuminate\Support\Facades\Route;

// ==========================================
// ASSIGNMENT 1 & 2: STUDENT MANAGEMENT
// ==========================================

// 1. Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. All Students List
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// 3. Register Student Form (ASSIGNMENT 2 - Isay {id} se upar rakhna hai)
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// 4. Save Student Data (ASSIGNMENT 2)
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// 5. Dynamic Student Profile (ASSIGNMENT 1)
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