<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Flooris\Prestashop\Models\Cart\CartRule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Cart\CartRuleCombination;

class CartRuleCombinationFactory extends Factory
{
    protected $model = CartRuleCombination::class;

    public function definition(): array
    {
        return [
            'id_cart_rule1' => CartRule::factory(),
            'id_cart_rule2' => CartRule::factory(),
        ];
    }
}
