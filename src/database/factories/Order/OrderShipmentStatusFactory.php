<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Enums\OrderShipmentStatusEnum;
use Flooris\Prestashop\Models\Order\OrderShipmentStatus;

class OrderShipmentStatusFactory extends Factory
{
    protected $model = OrderShipmentStatus::class;

    public function definition(): array
    {
        return [
            'id_logistics_user' => $this->faker->randomNumber(),
            'barcode'           => $this->faker->word(),
            'file_path'         => $this->faker->word(),
            'status'            => $this->faker->randomElement(OrderShipmentStatusEnum::class),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
            'delivered_date'    => Carbon::now(),
            'returned_date'     => Carbon::now(),
            'invited_date'      => Carbon::now(),
        ];
    }
}
