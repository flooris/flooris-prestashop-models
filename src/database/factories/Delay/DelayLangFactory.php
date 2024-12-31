<?php

namespace Flooris\Prestashop\Database\Factories\Delay;

use Flooris\Prestashop\Models\Delay\DelayLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class DelayLangFactory extends Factory
{
    protected $model = DelayLang::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
        ];
    }
}
