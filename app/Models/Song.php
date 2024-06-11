<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $fillable = ['name','duration', 'genre_id'];
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
