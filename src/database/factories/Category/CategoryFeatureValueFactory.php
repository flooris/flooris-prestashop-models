<?php

namespace Flooris\Prestashop\Database\Factories\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Category\Category;
use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Category\CategoryFeatureValue;

class CategoryFeatureValueFactory extends Factory
{
    protected $model = CategoryFeatureValue::class;

    public function definition(): array
    {
        return [
            'position' => $this->faker->randomNumber(),

            'id_category'      => Category::factory(),
            'id_feature_value' => FeatureValue::factory(),
            'id_shop'          => Shop::factory(),
        ];
    }
}
