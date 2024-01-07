<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,  // Utilisez $this->faker au lieu de $faker
            'icon' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'template_code' => Str::random(10),
            'status' => $this->faker->boolean,
            'professional' => $this->faker->boolean,
            'type' => $this->faker->randomElement(['original', 'custom']),
            'group' => $this->faker->word,
            'slug' => Str::slug($this->faker->word),
        ];
    }
}
