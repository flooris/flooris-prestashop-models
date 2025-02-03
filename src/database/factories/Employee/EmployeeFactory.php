<?php

namespace Flooris\Prestashop\Database\Factories\Employee;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'lastname'             => $this->faker->lastName(),
            'firstname'            => $this->faker->firstName(),
            'email'                => $this->faker->unique()->safeEmail(),
            'passwd'               => $this->faker->word(),
            'last_passwd_gen'      => Carbon::now(),
            'stats_date_from'      => Carbon::now(),
            'stats_date_to'        => Carbon::now(),
            'stats_compare_from'   => Carbon::now(),
            'stats_compare_to'     => Carbon::now(),
            'stats_compare_option' => $this->faker->randomNumber(),
            'preselect_date_range' => $this->faker->word(),
            'bo_color'             => $this->faker->word(),
            'bo_theme'             => $this->faker->word(),
            'bo_css'               => $this->faker->word(),
            'default_tab'          => $this->faker->randomNumber(),
            'bo_width'             => $this->faker->randomNumber(),
            'bo_menu'              => $this->faker->boolean(),
            'active'               => $this->faker->boolean(),
            'optin'                => $this->faker->boolean(),
            'last_connection_date' => Carbon::now(),
        ];
    }
}
