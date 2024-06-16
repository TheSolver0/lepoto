<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create()->create([
            'name' => 'Luc FOTSO',
            'email' => 'lucfotso0@gmail.com',
            'tel' => '690048482',
            'password' => 'admin@lepoto.com',
        ]);
    }
}
