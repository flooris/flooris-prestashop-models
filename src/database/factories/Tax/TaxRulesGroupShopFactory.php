<?php

namespace Flooris\Prestashop\Database\Factories\Tax;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Tax\TaxRulesGroupShop;

class TaxRulesGroupShopFactory extends Factory
{
    protected $model = TaxRulesGroupShop::class;

    public function definition(): array
    {
        return [
            'id_tax_rules_group' => TaxRulesGroup::factory(),
            'id_shop'            => Shop::factory(),
        ];
    }
}
