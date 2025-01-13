<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SillycatController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Session;
Route::get('/', function () {
    return view('hello');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/hello", [Welcome::class, 'hello'])->name('hello');
Route::get("/Silly", [SillycatController::class, 'Sillycat'])->name('Sillycat');

Route::get("/genres", [GenreController::class, 'index'])->name('genres.index');
Route::get("/genres/create", [GenreController::class, 'create']);
Route::post("/genres/store", [GenreController::class, 'store']);

Route::get("/songs", [SongController::class, 'index'])->name('songs.index');
Route::get("/songs/create", [SongController::class, 'create']);
Route::post("/songs/store", [SongController::class, 'store']);
Route::get("/songs/view/{song}",[SongController::class, 'show'])->name('songs.view');
Route::get("/songs/addToTempPlaylist/{song}",[SongController::class, 'addSongToTempPlaylist'])->name('songs.addToTempPlaylist');

Route::get("/playlist", [PlaylistController::class, 'index'])->name('playlist.index');
Route::get("/playlist/create", [PlaylistController::class, 'create']);
Route::get("/playlist/edit/{playlist}", [PlaylistController::class, 'edit'])->name('playlist.edit');
Route::post("/playlist/store", [PlaylistController::class, 'store']);
Route::get("/playlist/view/{playlist}", [PlaylistController::class, 'show'])->name('playlist.show');
Route::get("/playlist/user/{user}", [PlaylistController::class, 'indexUser'])->name('playlist.User');
Route::post("/playlist/addsong/{playlist}", [PlaylistController::class, 'addSongToPlaylist'])->name('playlist.addSong');
Route::delete("playlist/{playlist}/removesong/{song}", [PlaylistController::class, 'RemoveSongFromPlaylist'])->name('playlist.removeSong');


Route::get("/session/", [SessionController::class, 'index'])->name('session.index');
Route::get("/session/add", [SessionController::class, 'add'])->name('session.add');
Route::get("/session/remove", [SessionController::class, 'remove'])->name('session.remove');
require __DIR__.'/auth.php';
