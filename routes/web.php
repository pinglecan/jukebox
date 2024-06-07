<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SillycatController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/hello", [Welcome::class, 'hello']);
Route::get("/Silly", [SillycatController::class, 'Sillycat']);
Route::get("/songs", [SongController::class, 'index']);
Route::get("/genres", [GenreController::class, 'index']);
Route::get("/playlist", [PlaylistController::class, 'index']);

Route::get("/genres/create", [GenreController::class, 'create']);
Route::post("/genres/store", [GenreController::class, 'store']);

Route::get("/songs/create", [SongController::class, 'create']);
Route::post("/songs/store", [SongController::class, 'store']);
