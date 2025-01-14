<?php

namespace Flooris\Prestashop\Database\Factories\Cart;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Cart\CartRule;
use Flooris\Prestashop\Models\Cart\CartRuleLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartRuleLangFactory extends Factory
{
    protected $model = CartRuleLang::class;

    public function definition(): array
    {
        return [
            'id_cart_rule' => CartRule::factory(),
            'id_lang'      => Language::factory(),
        ];
    }
}
