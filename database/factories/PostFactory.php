<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10, 25)),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($paragraph) => "<p>$paragraph</p>")
                ->implode(''),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
