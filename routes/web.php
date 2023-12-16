<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;






Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    // Route::get('/form', function () {
    //     return view('form
    //     ');
    // })->name('form');

    Route::get('/form', [FormController::class,'store'])->name('form');
    


 
});

Route::get('/formtable', [FormController::class,'list'])->name('list');
Route::get('/edit/{id?}', [FormController::class, 'editform'])->name('editform');


Route::post('/submit-form', [FormController::class, 'store'])->name('store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashcboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';