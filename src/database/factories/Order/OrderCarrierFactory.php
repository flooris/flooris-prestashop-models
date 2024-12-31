<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderCarrier;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderCarrierFactory extends Factory
{
    protected $model = OrderCarrier::class;

    public function definition(): array
    {
        return [
            'weight'                 => $this->faker->randomFloat(),
            'shipping_cost_tax_excl' => $this->faker->randomFloat(),
            'shipping_cost_tax_incl' => $this->faker->randomFloat(),
            'tracking_number'        => $this->faker->word(),
            'date_add'               => Carbon::now(),
        ];
    }
}
