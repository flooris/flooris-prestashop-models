<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderDelay;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDelayFactory extends Factory
{
    protected $model = OrderDelay::class;

    public function definition(): array
    {
        return [
            'date_add' => Carbon::now(),
        ];
    }
}
