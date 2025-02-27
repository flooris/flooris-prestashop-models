<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeLang;

class AttributeLangFactory extends Factory
{
    protected $model = AttributeLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
