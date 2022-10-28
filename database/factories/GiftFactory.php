<?php

namespace Database\Factories;

use App\Models\Gift;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Gift>
 */
class GiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(random_int(1, 5), true),
            'source' => $this->faker->sentence,
            'system' => [
                'en' => $this->faker->paragraph,
                'ru' => $this->faker->paragraph,
            ],
            'description' => [
                'en' => $this->faker->paragraph,
                'ru' => $this->faker->paragraph,
            ],
        ];
    }
}
