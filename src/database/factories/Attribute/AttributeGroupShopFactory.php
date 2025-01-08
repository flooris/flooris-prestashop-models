<?php

namespace Flooris\Prestashop\Database\Factories\Attribute;

use Flooris\Prestashop\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Attribute\AttributeGroup;
use Flooris\Prestashop\Models\Attribute\AttributeGroupShop;

class AttributeGroupShopFactory extends Factory
{
    protected $model = AttributeGroupShop::class;

    public function definition(): array
    {
        return [
            'id_attribute_group' => AttributeGroup::factory(),
            'id_shop'            => Shop::factory(),
        ];
    }
}
