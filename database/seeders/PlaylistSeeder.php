<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Playlist::create([
            "name" => "Pinglevibes",
            "description" => "Something cool",
            "user_id" => "2"
        ]);
        Playlist::factory()->count(50)->create();
    }
}
