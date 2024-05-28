<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\Sillycat;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/hello", [Welcome::class, 'hello']);
Route::get("/randomSilly", [Sillycat::class, 'Sillycat']);
Route::get("/songs", [SongController::class, 'index']);
Route::get("/genres", [GenreController::class, 'index']);
