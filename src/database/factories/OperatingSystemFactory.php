<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\WebBrowser;
use Flooris\Prestashop\Models\OperatingSystem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatingSystemFactory extends Factory
{
    protected $model = OperatingSystem::class;

    public function definition(): array
    {
        return [
            'id_web_browser' => WebBrowser::factory(),
            'name'           => $this->faker->name(),
        ];
    }
}
