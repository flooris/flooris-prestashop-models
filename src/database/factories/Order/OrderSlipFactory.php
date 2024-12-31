<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderSlip;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderSlipFactory extends Factory
{
    protected $model = OrderSlip::class;

    public function definition(): array
    {
        return [
            'conversion_rate'         => $this->faker->randomFloat(),
            'total_products_tax_excl' => $this->faker->randomFloat(),
            'total_products_tax_incl' => $this->faker->randomFloat(),
            'total_shipping_tax_excl' => $this->faker->randomFloat(),
            'total_shipping_tax_incl' => $this->faker->randomFloat(),
            'shipping_cost'           => $this->faker->boolean(),
            'amount'                  => $this->faker->randomFloat(),
            'shipping_cost_amount'    => $this->faker->randomFloat(),
            'partial'                 => $this->faker->boolean(),
            'order_slip_type'         => $this->faker->boolean(),
            'date_add'                => Carbon::now(),
            'date_upd'                => Carbon::now(),
        ];
    }
}
