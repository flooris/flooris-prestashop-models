<?php

namespace Flooris\Prestashop\Database\Factories\SpecificPrice;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\SpecificPrice\SpecificPriceRule;

class SpecificPriceRuleFactory extends Factory
{
    protected $model = SpecificPriceRule::class;

    public function definition(): array
    {
        return [
            'name'           => $this->faker->name(),
            'from_quantity'  => $this->faker->randomNumber(),
            'price'          => $this->faker->randomFloat(),
            'reduction'      => $this->faker->randomFloat(),
            'reduction_tax'  => $this->faker->boolean(),
            'reduction_type' => $this->faker->word(),
            'from'           => Carbon::now(),
            'to'             => Carbon::now(),

            'id_shop'     => Shop::factory(),
            'id_currency' => Currency::factory(),
            'id_country'  => Country::factory(),
            'id_group'    => Group::factory(),
        ];
    }
}
