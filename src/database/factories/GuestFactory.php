<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    protected $model = Guest::class;

    public function definition(): array
    {
        return [
            'javascript'          => $this->faker->boolean(),
            'screen_resolution_x' => $this->faker->randomNumber(),
            'screen_resolution_y' => $this->faker->randomNumber(),
            'screen_color'        => $this->faker->boolean(),
            'sun_java'            => $this->faker->boolean(),
            'adobe_flash'         => $this->faker->boolean(),
            'adobe_director'      => $this->faker->boolean(),
            'apple_quicktime'     => $this->faker->boolean(),
            'real_player'         => $this->faker->boolean(),
            'windows_media'       => $this->faker->boolean(),
            'accept_language'     => $this->faker->word(),
            'mobile_theme'        => $this->faker->boolean(),
        ];
    }
}
