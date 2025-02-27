<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryFilter;

class CategoryFilterFactory extends Factory
{
    protected $model = CategoryFilter::class;

    public function definition(): array
    {
        return [
            'position'       => $this->faker->randomNumber(),
            'attribute_name' => $this->faker->name(),
            'filter_header'  => $this->faker->word(),
            'filter_type'    => $this->faker->word(),
            'limit'          => $this->faker->randomNumber(),
            'is_open'        => $this->faker->randomNumber(),
        ];
    }
}
