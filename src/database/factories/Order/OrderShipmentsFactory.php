<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Customer\Customer;
use Flooris\Prestashop\Models\Order\OrderShipments;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderShipmentsFactory extends Factory
{
    protected $model = OrderShipments::class;

    public function definition(): array
    {
        return [
            'id_order'        => Order::factory(),
            'id_customer'     => Customer::factory(),
            'email_address'   => $this->faker->unique()->safeEmail(),
            'track_and_trace' => $this->faker->word(),
            'is_processed'    => $this->faker->randomNumber(),
        ];
    }
}
