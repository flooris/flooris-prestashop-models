<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Order\OrderState;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderStateLanguage;

class OrderStateLanguageFactory extends Factory
{
    protected $model = OrderStateLanguage::class;

    public function definition(): array
    {
        return [
            'id_order_state' => OrderState::factory(),
            'id_lang'        => Language::factory(),
            'name'           => $this->faker->name(),
            'template'       => $this->faker->word(),
        ];
    }
}
