<?php

namespace Flooris\Prestashop\Database\Factories;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class CustomerFactory
 *
 * @package Flooris\Prestashop\Database\Factories
 */
class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_shop_group'              => 1,
            'id_shop'                    => 1,
            'id_gender'                  => $this->faker->randomElement([0, 1, 2]),
            'id_lang'                    => 1,
            'id_risk'                    => 1,
            'company'                    => null,
            'siret'                      => null,
            'ape'                        => null,
            'lastname'                   => substr($this->faker->lastName, 0, 32),
            'firstname'                  => substr($this->faker->lastName, 0, 32),
            'email'                      => $this->faker->email,
            'passwd'                     => $this->faker->md5,
            'last_passwd_gen'            => date('Y-m-d H:i:s'),
            'birthday'                   => $this->faker->dateTime,
            'newsletter'                 => 0,
            'ip_registration_newsletter' => null,
            'newsletter_date_add'        => null,
            'optin'                      => 0,
            'website'                    => null,
            'outstanding_allow_amount'   => 0,
            'show_public_prices'         => false,
            'secure_key'                 => $this->faker->md5,
            'note'                       => null,
            'active'                     => true,
            'is_guest'                   => $is_guest = $this->faker->boolean(10),
            'id_default_group'           => $is_guest ? 2 : 3,
            'deleted'                    => false,
            'date_add'                   => Carbon::now(),
            'date_upd'                   => Carbon::now(),
        ];
    }
}
