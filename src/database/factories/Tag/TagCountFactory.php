<?php

namespace Flooris\Prestashop\Database\Factories\Tag;

use Flooris\Prestashop\Models\Tag\TagCount;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagCountFactory extends Factory
{
    protected $model = TagCount::class;

    public function definition(): array
    {
        return [
            'counter' => $this->faker->randomNumber(),
        ];
    }
}
