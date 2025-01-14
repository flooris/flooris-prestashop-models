<?php

namespace Flooris\Prestashop\Database\Factories\Country;

use Flooris\Prestashop\Models\Zone\Zone;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'iso_code'                   => $this->faker->word(),
            'call_prefix'                => $this->faker->randomNumber(),
            'active'                     => $this->faker->boolean(),
            'contains_states'            => $this->faker->boolean(),
            'need_identification_number' => $this->faker->boolean(),
            'need_zip_code'              => $this->faker->postcode(),
            'zip_code_format'            => $this->faker->postcode(),
            'display_tax_label'          => $this->faker->boolean(),

            'id_zone'     => Zone::factory(),
            'id_currency' => Currency::factory(),
        ];
    }
}
