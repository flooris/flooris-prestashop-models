<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderSyncLog;
use Flooris\Prestashop\Enums\OrderSyncStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderSyncLogFactory extends Factory
{
    protected $model = OrderSyncLog::class;

    public function definition(): array
    {
        return [
            'status'   => $this->faker->randomElement(OrderSyncStatusEnum::class),
            'message'  => $this->faker->word(),
            'date_upd' => Carbon::now(),
        ];
    }
}
