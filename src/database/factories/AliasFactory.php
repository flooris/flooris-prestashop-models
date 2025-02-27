<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\Alias;
use Illuminate\Database\Eloquent\Factories\Factory;

class AliasFactory extends Factory
{
    protected $model = Alias::class;

    public function definition(): array
    {
        return [
            'alias'  => $this->faker->word(),
            'search' => $this->faker->word(),
            'active' => $this->faker->boolean(),
        ];
    }
}
