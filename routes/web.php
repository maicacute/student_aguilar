<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    //route for creating new grades controller
    Route::get('grades', [\App\Http\Controllers\GradesController::class, 'index'])->name('grades.index');

    Route::get('evaluation', [\App\Http\Controllers\EvaluationController::class, 'index'])->name('evaluation.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('students', [App\Http\Controllers\studentController::class, 'index']);
    Route::post('students', [App\Http\Controllers\studentController::class, 'index']);
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('students', [\App\Http\Controllers\studentController::class, 'index'])->name('students.index');
    Route::get('students/create', [App\Http\Controllers\studentController::class, 'create'])->name('students.create');
    Route::post('students', [App\Http\Controllers\studentController::class, 'store'])->name('students.store');
    Route::get('students/{id}/edit', [App\Http\Controllers\studentController::class, 'edit'])->name('students.edit');
    Route::put('students/{id}/edit', [App\Http\Controllers\studentController::class, 'update'])->name('students.update');
    Route::get('students/{id}/delete', [App\Http\Controllers\studentController::class, 'destroy'])->name('students.delete');
});
