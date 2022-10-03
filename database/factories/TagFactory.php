<?php

namespace Database\Factories;

use App\Models\Tag;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tag>
 */
class TagFactory extends Factory
{
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        $nameLength = random_int(2, 4);

        return [
            'name' => [
                'en' => $this->faker->sentence($nameLength),
                'ru' => $this->faker->sentence($nameLength)
            ],
            'bg_color' => $this->faker->rgbaCssColor(),
            'text_color' => $this->faker->rgbaCssColor(),
        ];
    }
}
