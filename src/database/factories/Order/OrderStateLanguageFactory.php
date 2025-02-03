<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderStateLanguage;

class OrderStateLanguageFactory extends Factory
{
    protected $model = OrderStateLanguage::class;

    public function definition(): array
    {
        return [
            'name'     => $this->faker->name(),
            'template' => $this->faker->word(),
        ];
    }
}
