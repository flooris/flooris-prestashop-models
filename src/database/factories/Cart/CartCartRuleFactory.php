<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Flooris\Prestashop\Models\Cart\Cart;
use Flooris\Prestashop\Models\Cart\CartRule;
use Flooris\Prestashop\Models\Cart\CartCartRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartCartRuleFactory extends Factory
{
    protected $model = CartCartRule::class;

    public function definition(): array
    {
        return [
            'id_cart'      => Cart::factory(),
            'id_cart_rule' => CartRule::factory(),
        ];
    }
}
