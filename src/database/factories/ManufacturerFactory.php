<?php

namespace Flooris\Prestashop\Database\Factories;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ManufacturerFactory
 *
 * @package Flooris\Prestashop\Database\Factories
 */
class ManufacturerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manufacturer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'active' => true,
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}
