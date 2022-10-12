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

    protected array $colors = [
        'slate', 'gray', 'zinc', 'neutral', 'stone', 'red', 'orange', 'amber', 'yellow', 'lime', 'green', 'emerald',
        'teal', 'cyan', 'sky', 'blue', 'indigo', 'violet', 'purple', 'fuchsia', 'pink', 'rose'
    ];

    /**
     * Сгенерировать случайный класс Tailwind для закраски
     *
     * @param string $prefix
     * @return string
     * @throws Exception
     */
    protected function getRandomTailwindColor(string $prefix): string
    {
        $color = $this->colors[array_rand($this->colors)];
        $degree = random_int(0, 9);
        $degree =  $degree !== 0 ? $degree * 100 : 50;

        return $prefix.'-'.$color.'-'.$degree;
    }

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
            'bg_color' => $this->getRandomTailwindColor('bg'),
            'text_color' => $this->getRandomTailwindColor('text'),
        ];
    }
}

