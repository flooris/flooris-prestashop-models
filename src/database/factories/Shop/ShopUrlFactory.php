<?php

namespace Flooris\Prestashop\Database\Factories\Shop;

use Flooris\Prestashop\Models\Shop\ShopUrl;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopUrlFactory extends Factory
{
    protected $model = ShopUrl::class;

    public function definition(): array
    {
        return [
            'domain'       => $this->faker->word(),
            'domain_ssl'   => $this->faker->word(),
            'physical_uri' => $this->faker->word(),
            'virtual_uri'  => $this->faker->word(),
            'main'         => $this->faker->randomNumber(),
            'active'       => $this->faker->randomNumber(),
        ];
    }
}
