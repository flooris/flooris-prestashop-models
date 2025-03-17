<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderMessageLang;

class OrderMessageLangFactory extends Factory
{
    protected $model = OrderMessageLang::class;

    public function definition(): array
    {
        return [
            'name'    => $this->faker->name(),
            'message' => $this->faker->word(),
        ];
    }
}
