<?php

namespace Flooris\Prestashop\Database\Factories\Configuration;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Configuration\ConfigurationKpi;

class ConfigurationKpiFactory extends Factory
{
    protected $model = ConfigurationKpi::class;

    public function definition(): array
    {
        return [
            'name'                 => $this->faker->name(),
            'value'                => $this->faker->word(),
            'date_add'             => Carbon::now(),
            'date_upd'             => Carbon::now(),

            'id_shop_group' => ShopGroup::factory(),
            'id_shop'       => Shop::factory(),
        ];
    }
}
