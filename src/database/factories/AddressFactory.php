<?php

namespace Flooris\Prestashop\Database\Factories;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\State;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Warehouse;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Customer\Customer;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Manufacturer\Manufacturer;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'alias'        => $this->faker->word(),
            'company'      => $this->faker->company(),
            'lastname'     => $this->faker->lastName(),
            'firstname'    => $this->faker->firstName(),
            'address1'     => $this->faker->address(),
            'house_number' => $this->faker->word(),
            'address2'     => $this->faker->address(),
            'postcode'     => $this->faker->postcode(),
            'city'         => $this->faker->city(),
            'other'        => $this->faker->word(),
            'phone'        => $this->faker->phoneNumber(),
            'phone_mobile' => $this->faker->phoneNumber(),
            'vat_number'   => $this->faker->word(),
            'dni'          => $this->faker->word(),
            'date_add'     => Carbon::now(),
            'date_upd'     => Carbon::now(),
            'active'       => $this->faker->boolean(),
            'deleted'      => $this->faker->boolean(),

            'id_country'      => Country::factory(),
            'id_state'        => State::factory(),
            'id_customer'     => Customer::factory(),
            'id_manufacturer' => Manufacturer::factory(),
            'id_supplier'     => Supplier::factory(),
            'id_warehouse'    => Warehouse::factory(),
        ];
    }
}
