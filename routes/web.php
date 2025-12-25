<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/',[PropertyController::class,'home'])->name('home');
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->name('dashboard')->middleware('auth');
Route::get('/properties/create', [PropertyController::class,'create'])->name('properties.create')->middleware('auth');
Route::get('/properties/filter', [PropertyController::class,'filter'])->name('property.filter');
Route::resource('properties', PropertyController::class) ->except(['create']);