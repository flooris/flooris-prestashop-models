<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Cart\CartRule;
use Flooris\Prestashop\Models\Cart\CartRuleShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartRuleShopFactory extends Factory
{
    protected $model = CartRuleShop::class;

    public function definition(): array
    {
        return [
            'id_cart_rule' => CartRule::factory(),
            'id_shop'      => Shop::factory(),
        ];
    }
}
