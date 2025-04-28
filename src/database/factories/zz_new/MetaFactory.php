<?php

namespace Flooris\Prestashop\Database\Factories\zz_new;

use Flooris\Prestashop\Models\Meta\Meta;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetaFactory extends Factory
{
    protected $model = Meta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'page'         => $this->faker->word(),
            'configurable' => $this->faker->boolean(),
        ];
    }
}
