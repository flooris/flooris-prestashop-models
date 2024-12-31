<?php

namespace Flooris\Prestashop\Database\Factories\Profile;

use Flooris\Prestashop\Models\Profile\ProfileLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileLangFactory extends Factory
{
    protected $model = ProfileLang::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
