<?php

namespace Flooris\Prestashop\Database\Factories\Profile;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Profile\Profile;
use Flooris\Prestashop\Models\Profile\ProfileLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileLangFactory extends Factory
{
    protected $model = ProfileLang::class;

    public function definition(): array
    {
        return [
            'id_lang'    => Language::factory(),
            'id_profile' => Profile::factory(),
            'name'       => $this->faker->name(),
        ];
    }
}
