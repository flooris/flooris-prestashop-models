<?php

namespace Flooris\Prestashop\Database\Factories\Shop;

use Flooris\Prestashop\Models\Shop\ShopGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopGroupFactory extends Factory
{
    protected $model = ShopGroup::class;

    public function definition(): array
    {
        return [
            'name'           => $this->faker->name(),
            'share_customer' => $this->faker->boolean(),
            'share_order'    => $this->faker->boolean(),
            'share_stock'    => $this->faker->boolean(),
            'active'         => $this->faker->boolean(),
            'deleted'        => $this->faker->boolean(),
        ];
    }
}
