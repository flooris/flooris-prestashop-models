<?php

namespace Flooris\Prestashop\Database\Factories;

use Flooris\Prestashop\Models\WebBrowser;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebBrowserFactory extends Factory
{
    protected $model = WebBrowser::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
