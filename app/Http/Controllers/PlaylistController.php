<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playlists = Playlist::all();

        return view('playlist.index', ['playlists' => $playlists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlist.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "playlistName" => "|required|min:2",
        ]);
        //gebruik model om data in database te zetten
        Playlist::create([
            "name" => $request->playlistName
        ]);

        return redirect()->route('playlist.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        $songs = Song::all();
        return view('playlist.show', ['playlist' => $playlist, 'songs' => $songs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        //
    }

    /**
     * Add a song to the playlist
     */

    public function addSongToPlaylist(Playlist $playlist, Request $request)
    {
        //playlist

        $song = $request->get("selectedSong");

        $playlist->songs()->attach($song);

        return redirect()->back();


        //song

    }

    public function RemoveSongFromPlaylist(Playlist $playlist, Song $song, Request $request)
    {

        $playlist->songs()->detach($song->id);

        return redirect()->back();
    }

}
