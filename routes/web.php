<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

//countries
Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/create', [CountryController::class, 'create']);
Route::get('/countries/{country}', [CountryController::class, 'show'])->name("countries.show");
Route::post('/countries', [CountryController::class, 'store']);
Route::get('/countries/{country}/edit', [CountryController::class, 'edit']);
Route::put('/countries/{country}', [CountryController::class, 'update']);
Route::delete('/countries/{country}', [CountryController::class, 'destroy']);