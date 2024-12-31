<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderCartRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderCartRuleFactory extends Factory
{
    protected $model = OrderCartRule::class;

    public function definition(): array
    {
        return [
            'name'           => $this->faker->name(),
            'value'          => $this->faker->randomFloat(),
            'value_tax_excl' => $this->faker->randomFloat(),
            'free_shipping'  => $this->faker->boolean(),
        ];
    }
}
