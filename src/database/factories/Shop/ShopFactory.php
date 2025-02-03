<?php

namespace Flooris\Prestashop\Database\Factories\Shop;

use Flooris\Prestashop\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    protected $model = Shop::class;

    public function definition(): array
    {
        return [
            'name'    => $this->faker->name(),
            'active'  => $this->faker->randomNumber(),
            'deleted' => $this->faker->randomNumber(),
        ];
    }
}
