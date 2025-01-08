<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Cart\CartRule;
use Flooris\Prestashop\Models\Cart\CartRuleGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartRuleGroupFactory extends Factory
{
    protected $model = CartRuleGroup::class;

    public function definition(): array
    {
        return [
            'id_cart_rule' => CartRule::factory(),
            'id_group'     => Group::factory(),
        ];
    }
}
