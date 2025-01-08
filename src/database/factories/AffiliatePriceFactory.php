<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\AffiliatePrice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Product\ProductAttribute;

class AffiliatePriceFactory extends Factory
{
    protected $model = AffiliatePrice::class;

    public function definition(): array
    {
        return [
            'affiliate_key'  => $this->faker->word(),
            'price_tax_incl' => $this->faker->randomFloat(),

            'id_product_attribute' => ProductAttribute::factory(),
        ];
    }
}
