<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view
        $songs = Song::all();
        $genres = Genre::all();
        return view('songs.index', ['songs' => $songs, 'genres' => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate of the request

        $validated = $request->validate([
            'name' => "required|string",
            'duration' => "required|integer|min:0",
            'genre_id' => "required|integer|min:1|exists:genres,id",
        ]);
        //store to db

        Genre::create([

            "name" => $request->name,
            "duration" => $request->duration,
            "genre_id" => $request->genre_id
        ]);
        $songs = Song::all();
        $genres = Genre::all();
       return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
