<?php

namespace Flooris\Prestashop\Database\Factories;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class AddressFactory
 *
 * @package Flooris\Prestashop\Database\Factories
 */
class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_country' => 13, // Netherlands
            'id_state' => 0,
            'id_customer' => Customer::factory(),
            'id_manufacturer' => 0,
            'id_supplier' => 0,
            'id_warehouse' => 0,
            'alias' => substr("{$this->faker->streetAddress}, {$this->faker->city}", 0, 32),
            'company' => $this->faker->boolean(5) ? $this->faker->company : '',
            'lastname' => substr($this->faker->lastName, 0, 32),
            'firstname' => substr($this->faker->lastName, 0, 32),
            'address1' => $this->faker->streetAddress,
            'address2' => '',
            'postcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'other' => '',
            'phone' => $this->faker->phoneNumber,
            'phone_mobile' => '',
            'vat_number' => '',
            'dni' => '',
            'active' => true,
            'deleted' => false,
            'date_add' => Carbon::now(),
            'date_upd' => Carbon::now(),
        ];
    }
}
