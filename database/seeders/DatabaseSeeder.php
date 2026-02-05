<?php

namespace Database\Seeders;

use App\Models\property;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        User::factory(10)->create()->each(function ($user) {
            Property::factory(5)->create(['user_id' => $user->id ,]);
        });
        // $user = User::factory()->create();

        Property::factory(20)->create();
    }
}
