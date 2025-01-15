<?php

namespace Flooris\Prestashop\Database\Factories\Feature;

use Flooris\Prestashop\Models\Feature\Feature;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Feature\FeatureProduct;

class FeatureProductFactory extends Factory
{
    protected $model = FeatureProduct::class;

    public function definition(): array
    {
        return [

            'id_feature'       => Feature::factory(),
            'id_product'       => Product::factory(),
            'id_feature_value' => FeatureValue::factory(),
        ];
    }
}
