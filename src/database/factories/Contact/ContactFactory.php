<?php

namespace Flooris\Prestashop\Database\Factories\Contact;

use Flooris\Prestashop\Models\Contact\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'email'            => $this->faker->unique()->safeEmail(),
            'customer_service' => $this->faker->boolean(),
            'position'         => $this->faker->randomNumber(),
        ];
    }
}
