<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    public function songs()
    {
        return $this->hasMany(Song::class,'playlist_song')->withTimestamps();
    }

    public function addSong(Song $song)
    {
        if($this->songs()->count() >= 10){
            throw new \Exception("A playlist can have a maximum of 10 songs.");
        }

        $this->songs()->attach($song);
    }
}
