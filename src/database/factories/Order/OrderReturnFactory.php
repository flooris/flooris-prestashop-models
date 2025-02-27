<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Order\OrderReturn;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderReturnFactory extends Factory
{
    protected $model = OrderReturn::class;

    public function definition(): array
    {
        return [
            'state'    => $this->faker->boolean(),
            'question' => $this->faker->word(),
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}
