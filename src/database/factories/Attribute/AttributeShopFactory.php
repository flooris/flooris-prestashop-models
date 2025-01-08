<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Attribute\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeShop;

class AttributeShopFactory extends Factory
{
    protected $model = AttributeShop::class;

    public function definition(): array
    {
        return [
            'id_attribute' => Attribute::factory(),
            'id_shop'      => Shop::factory(),
        ];
    }
}
