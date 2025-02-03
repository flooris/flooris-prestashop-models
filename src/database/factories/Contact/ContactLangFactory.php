<?php

namespace Flooris\Prestashop\Database\Factories\Contact;

use Flooris\Prestashop\Models\Contact\ContactLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactLangFactory extends Factory
{
    protected $model = ContactLang::class;

    public function definition(): array
    {
        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}
