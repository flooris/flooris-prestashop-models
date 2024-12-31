<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderShipments;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderShipmentsFactory extends Factory
{
    protected $model = OrderShipments::class;

    public function definition(): array
    {
        return [
            'email_address'   => $this->faker->unique()->safeEmail(),
            'track_and_trace' => $this->faker->word(),
            'is_processed'    => $this->faker->randomNumber(),
        ];
    }
}
