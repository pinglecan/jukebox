<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Pinglecan',
            'email' => 'jellefiere@gmail.com',
            'password' => Hash::make('R;;WaFD3p;dbGt:'),
        ]);
    }
}
