<?php

namespace Flooris\Prestashop\Database\Factories\Tag;

use Flooris\Prestashop\Models\Tag\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
