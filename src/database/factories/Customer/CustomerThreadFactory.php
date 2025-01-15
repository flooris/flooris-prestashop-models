<?php

namespace Flooris\Prestashop\Database\Factories\Customer;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Contact\Contact;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Flooris\Prestashop\Models\Customer\CustomerThread;
use Flooris\Prestashop\Enums\OrderShipmentStatusEnum;

class CustomerThreadFactory extends Factory
{
    protected $model = CustomerThread::class;

    public function definition(): array
    {
        return [
            'status'             => $this->faker->randomElement(OrderShipmentStatusEnum::class),
            'email'              => $this->faker->unique()->safeEmail(),
            'token'              => Str::random(10),
            'date_add'           => Carbon::now(),
            'date_upd'           => Carbon::now(),

            'id_shop'     => Shop::factory(),
            'id_lang'     => Language::factory(),
            'id_contact'  => Contact::factory(),
            'id_customer' => Customer::factory(),
            'id_order'    => Order::factory(),
            'id_product'  => Product::factory(),
        ];
    }
}
