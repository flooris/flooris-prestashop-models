<?php

namespace Flooris\Prestashop\Database\Factories\Carrier;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Carrier\Carrier;
use Flooris\Prestashop\Models\Tax\TaxRulesGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Carrier\CarrierTaxRulesGroupShop;

class CarrierTaxRulesGroupShopFactory extends Factory
{
    protected $model = CarrierTaxRulesGroupShop::class;

    public function definition(): array
    {
        return [
            'id_carrier'         => Carrier::factory(),
            'id_tax_rules_group' => TaxRulesGroup::factory(),
            'id_shop'            => Shop::factory(),
        ];
    }
}
