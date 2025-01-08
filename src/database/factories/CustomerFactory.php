<?php

namespace Flooris\Prestashop\Database\Factories;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Customer;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Risk\Risk;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Gender\Gender;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'company'                    => $this->faker->company(),
            'siret'                      => $this->faker->word(),
            'ape'                        => $this->faker->word(),
            'firstname'                  => $this->faker->firstName(),
            'lastname'                   => $this->faker->lastName(),
            'email'                      => $this->faker->unique()->safeEmail(),
            'passwd'                     => $this->faker->word(),
            'last_passwd_gen'            => Carbon::now(),
            'birthday'                   => Carbon::now(),
            'newsletter'                 => $this->faker->boolean(),
            'ip_registration_newsletter' => $this->faker->ipv4(),
            'newsletter_date_add'        => Carbon::now(),
            'optin'                      => $this->faker->boolean(),
            'website'                    => $this->faker->word(),
            'outstanding_allow_amount'   => $this->faker->randomFloat(),
            'show_public_prices'         => $this->faker->boolean(),
            'max_payment_days'           => $this->faker->randomNumber(),
            'secure_key'                 => $this->faker->word(),
            'note'                       => $this->faker->word(),
            'active'                     => $this->faker->boolean(),
            'is_guest'                   => $this->faker->boolean(),
            'deleted'                    => $this->faker->boolean(),
            'date_add'                   => Carbon::now(),
            'date_upd'                   => Carbon::now(),

            'id_shop_group'    => ShopGroup::factory(),
            'id_shop'          => Shop::factory(),
            'id_gender'        => Gender::factory(),
            'id_default_group' => Group::factory(),
            'id_lang'          => Language::factory(),
            'id_risk'          => Risk::factory(),
        ];
    }
}
