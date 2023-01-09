<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $values = collect([
            'Action',
            'Comedy',
            'Drama',
            'Horror',
            'Western',
            'Thriller',
            'Animation',
            'Documentary'
        ]);

        return [
            'title' => fake()->text(80),
            'director' => fake()->name,
            'imageUrl' => fake()->imageUrl(),
            'duration' => fake()->numberBetween(60, 200),
            'releaseDate' => fake()->date(),
            'genres' => $values->random(3)
        ];
        // return [
        //     'title' => $this->faker->text(80),
        //     'director' => $this->faker->name,
        //     'imageUrl' => $this->faker->text(),
        //     'duration' => $this->faker->randomDigit(),
        //     'releaseDate' => $this->faker->date(),
        //     'genres' => $this->faker->text('comedy')
        // ];
    }
}
