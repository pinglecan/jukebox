<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function userIndex()
    {

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
            "name" => $request->playlistName,
            "description" => $request->playlistDescription,
            "user_id" => Auth::id(),
        ]);

        return redirect()->route('playlist.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $playlist = Playlist::with('songs')->find($id);

        $totalDuration = $playlist->songs->sum('duration');

        $songs = Song::all();
        return view('playlist.show', ['playlist' => $playlist, 'songs' => $songs], compact('playlist', 'totalDuration'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        return view('playlist.edit', ['playlist' => $playlist]);
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

    }

    /**
     * remove a song from the playlist
     */
    public function RemoveSongFromPlaylist(Playlist $playlist, Song $song, Request $request)
    {

        $playlist->songs()->detach($song->id);

        return redirect()->back();
    }

}
