<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Cart\CartProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartProductFactory extends Factory
{
    protected $model = CartProduct::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'date_add' => Carbon::now(),
        ];
    }
}
