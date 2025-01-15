<?php

namespace Flooris\Prestashop\Database\Factories\Contact;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Contact\Contact;
use Flooris\Prestashop\Models\Contact\ContactShop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactShopFactory extends Factory
{
    protected $model = ContactShop::class;

    public function definition(): array
    {
        return [
            'id_contact' => Contact::factory(),
            'id_shop'    => Shop::factory(),
        ];
    }
}
