<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThemeFactory extends Factory
{
    protected $model = Theme::class;

    public function definition(): array
    {
        return [
            'name'                 => $this->faker->name(),
            'directory'            => $this->faker->word(),
            'responsive'           => $this->faker->boolean(),
            'default_left_column'  => $this->faker->boolean(),
            'default_right_column' => $this->faker->boolean(),
            'product_per_page'     => $this->faker->randomNumber(),
        ];
    }
}
