<?php

namespace Flooris\Prestashop\Database\Factories\Group;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Group\GroupShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupShopFactory extends Factory
{
    protected $model = GroupShop::class;

    public function definition(): array
    {
        return [
            'id_group' => Group::factory(),
            'id_shop'  => Shop::factory(),
        ];
    }
}
