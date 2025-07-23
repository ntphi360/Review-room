<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Phi Nguyen',
            'email' => 'preal360@gmail.com'
        ]);
        Listing::factory()->count(20)->create([
            'by_user_id' => 1,
        ]);
    }
}