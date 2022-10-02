<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Color::factory()->count(3)->create();
        \App\Models\Category::factory()->count(3)->create();
        \App\Models\Province::factory()->count(3)->create();
        \App\Models\Locality::factory()->count(10)->create();
        \App\Models\Street::factory()->count(30)->create();
        \App\Models\Address::factory()->count(50)->create();
        \App\Models\Occupation::factory()->count(3)->create();
        \App\Models\Icon::factory()->count(3)->create();
        \App\Models\Status::factory()->count(2)->create();
        \App\Models\User::factory()->count(10)->create();
        \App\Models\Post::factory()->count(10)->create();
        \App\Models\Comment::factory()->count(10)->create();
        \App\Models\Like::factory()->count(10)->create();
    }
}
