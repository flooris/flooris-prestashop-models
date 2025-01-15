<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Feature\Feature;
use Flooris\Prestashop\Models\Feature\FeatureShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureShopFactory extends Factory
{
    protected $model = FeatureShop::class;

    public function definition(): array
    {
        return [
            'id_feature' => Feature::factory(),
            'id_shop'    => Shop::factory(),
        ];
    }
}
