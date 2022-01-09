<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ucwords($this->faker->word);
        return [
            'name' => $name,
            'slug' => str::slug($name)
        ];
    }
}
