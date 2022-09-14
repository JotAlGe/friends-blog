<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Locality;
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
        \App\Models\Province::factory()->has(Locality::factory()->count(5))->create();
        \App\Models\Locality::factory()->count(10)->create();
        \App\Models\Street::factory()->count(30)->create();
        \App\Models\Address::factory()->count(50)->create();
        \App\Models\Occupation::factory()->count(20)->create();
        \App\Models\Icon::factory()->count(3)->create();
        \App\Models\Status::factory()->count(2)->create();
        \App\Models\User::factory()->count(50)->create();
        \App\Models\Post::factory()->count(100)->create();
        \App\Models\Like::factory()->count(50)->create();
    }
}
