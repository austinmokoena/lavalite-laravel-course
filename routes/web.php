<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/dashboard' ,[HomeController::class,'index'])->middleware(['auth','admin']);

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/laravel-setup', function () {
    return view('laravel-setup');
})->middleware(['auth', 'verified'])->name('laravel-setup');

Route::get('/laravel-intro', function () {
    return view('laravel-intro');
})->middleware(['auth', 'verified'])->name('laravel-intro');

Route::get('/laravel-folders', function () {
    return view('laravel-folders');
})->middleware(['auth', 'verified'])->name('laravel-folders');

Route::get('/laravel-routes-controllers', function () {
    return view('laravel-routes-controllers');
})->middleware(['auth', 'verified'])->name('laravel-routes-controllers');


Route::get('/hello', function () {return view('hello');})->name('hello');

Route::get('/laravel-blade', function () {
    return view('laravel-blade');
})->middleware(['auth', 'verified'])->name('laravel-blade');

Route::get('/laravel-database', function () {
    return view('laravel-database');
})->middleware(['auth', 'verified'])->name('laravel-database');

Route::get('/laravel-forms', function () {
    return view('laravel-forms');
})->middleware(['auth', 'verified'])->name('laravel-forms');



require __DIR__.'/auth.php';
