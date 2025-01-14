<?php

namespace Flooris\Prestashop\Database\Factories\Delay;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Delay\Delay;
use Flooris\Prestashop\Models\Delay\DelayLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class DelayLangFactory extends Factory
{
    protected $model = DelayLang::class;

    public function definition(): array
    {
        return [
            'id_delay'    => Delay::factory(),
            'id_lang'     => Language::factory(),
            'description' => $this->faker->text(),
        ];
    }
}
