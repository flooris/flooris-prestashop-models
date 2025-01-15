<?php

namespace Flooris\Prestashop\Database\Factories\Order;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Order\OrderMessage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Order\OrderMessageLang;

class OrderMessageLangFactory extends Factory
{
    protected $model = OrderMessageLang::class;

    public function definition(): array
    {
        return [
            'id_order_message' => OrderMessage::factory(),
            'id_lang'          => Language::factory(),
            'name'             => $this->faker->name(),
            'message'          => $this->faker->word(),
        ];
    }
}
