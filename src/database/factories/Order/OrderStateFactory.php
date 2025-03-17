<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Order\OrderState;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderStateFactory extends Factory
{
    protected $model = OrderState::class;

    public function definition(): array
    {
        return [
            'invoice'      => $this->faker->boolean(),
            'send_email'   => $this->faker->boolean(),
            'module_name'  => $this->faker->name(),
            'color'        => $this->faker->word(),
            'unremovable'  => $this->faker->boolean(),
            'hidden'       => $this->faker->boolean(),
            'logable'      => $this->faker->boolean(),
            'delivery'     => $this->faker->boolean(),
            'shipped'      => $this->faker->boolean(),
            'paid'         => $this->faker->boolean(),
            'pdf_delivery' => $this->faker->boolean(),
            'deleted'      => $this->faker->boolean(),
            'position'     => $this->faker->randomNumber(),
        ];
    }
}
