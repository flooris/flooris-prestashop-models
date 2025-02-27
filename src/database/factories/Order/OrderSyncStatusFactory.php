<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Enums\OrderSyncStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderSyncStatus;

class OrderSyncStatusFactory extends Factory
{
    protected $model = OrderSyncStatus::class;

    public function definition(): array
    {
        return [
            'status'   => $this->faker->randomElement(OrderSyncStatusEnum::class),
            'date_upd' => Carbon::now(),
        ];
    }
}
