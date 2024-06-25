<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SillycatController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Welcome;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get("/hello", [Welcome::class, 'hello']);
Route::get("/Silly", [SillycatController::class, 'Sillycat']);

Route::get("/genres", [GenreController::class, 'index'])->name('genres.index');
Route::get("/genres/create", [GenreController::class, 'create']);
Route::post("/genres/store", [GenreController::class, 'store']);

Route::get("/songs", [SongController::class, 'index'])->name('songs.index');
Route::get("/songs/create", [SongController::class, 'create']);
Route::post("/songs/store", [SongController::class, 'store']);
Route::get("/songs/view/{song}",[SongController::class, 'show'])->name('songs.view');

Route::get("/playlist", [PlaylistController::class, 'index'])->name('playlist.index');
Route::get("/playlist/create", [PlaylistController::class, 'create']);
Route::post("/playlist/store", [PlaylistController::class, 'store']);
Route::get("/playlist/view/{playlist}", [PlaylistController::class, 'show'])->name('playlist.show');
Route::post("/playlist/addsong/{playlist}", [PlaylistController::class, 'addSongToPlaylist'])->name('playlist.addSong');
