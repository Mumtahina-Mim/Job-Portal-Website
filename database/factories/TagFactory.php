<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Tag::class;

    public function definition()
    {
        $name = ucwords($this->faker->word);

        return [
            'name' -> $name,
            'slug' -> Str::slug($name)
        ];
    }
}
