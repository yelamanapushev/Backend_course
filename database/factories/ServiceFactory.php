<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'tags' => $this->faker->word(),
            'author' => $this->faker->firstName(),
            'sphere' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
