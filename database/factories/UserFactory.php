<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Occupation;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'lastname' => fake()->lastName(),
            'username' => fake()->userName(),
            'slug' => Str::slug($name, '-'),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'profile_photo' => fake()->imageUrl(500, 500, null, true),
            'birth' => fake()->dateTime(),
            'aboutme' => fake()->paragraph(),
            'cover_photo' => fake()->imageUrl(1200, 500, null, true),
            'address_id' => Address::inRandomOrder()->first()->id,
            'occupation_id' => Occupation::inRandomOrder()->first()->id,
            'status_id' => Status::inRandomOrder()->first()->id,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
