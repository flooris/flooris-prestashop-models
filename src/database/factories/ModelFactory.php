<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Carbon\Carbon;
use Faker\Generator;
use Flooris\Prestashop\Models\Order;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\Customer;
use Flooris\Prestashop\Models\OrderDetail;
use Flooris\Prestashop\Models\OrderInvoice;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Customer::class, function(Generator $faker) {
    $is_guest = $faker->boolean(10);

    return [
        'id_shop_group' => 1,
        'id_shop' => 4, // Brekz.nl
        'id_gender' => $faker->randomElement([0, 1, 2]),
        'id_default_group' => $is_guest ? 2 : 3,
        'id_lang' => 7, // Dutch
        'id_risk' => 1,
        'company' => null,
        'siret' => null,
        'ape' => null,
        'lastname' => substr($faker->lastName, 0, 32),
        'firstname' => substr($faker->lastName, 0, 32),
        'email' => $faker->email,
        'passwd' => md5($faker->password),
        'last_passwd_gen' => date('Y-m-d H:i:s'),
        'birthday' => $faker->dateTime,
        'newsletter' => 0,
        'ip_registration_newsletter' => null,
        'newsletter_date_add' => null,
        'optin' => 0,
        'website' => null,
        'outstanding_allow_amount' => 0,
        'show_public_prices' => false,
        'secure_key' => md5($faker->text()),
        'note' => null,
        'active' => true,
        'is_guest' => $is_guest,
        'deleted' => false,
        'date_add' => Carbon::now(),
        'date_upd' => Carbon::now()
    ];
});

$factory->define(Address::class, function(Generator $faker) {
    return [
        'id_country' => 13, // Netherlands
        'id_state' => 0,
        'id_customer' => function() {
            return factory(Customer::class)->create()->id_customer;
        },
        'id_manufacturer' => 0,
        'id_supplier' => 0,
        'id_warehouse' => 0,
        'alias' => substr($faker->streetAddress . ', ' . $faker->city, 0, 32),
        'company' => $faker->boolean(5) ? $faker->company : '',
        'lastname' => substr($faker->lastName, 0, 32),
        'firstname' => substr($faker->lastName, 0, 32),
        'address1' => $faker->streetAddress,
        'address2' => '',
        'postcode' => $faker->postcode,
        'city' => $faker->city,
        'other' => '',
        'phone' => $faker->phoneNumber,
        'phone_mobile' => '',
        'vat_number' => '',
        'dni' => '',
        'active' => true,
        'deleted' => false,
        'date_add' => Carbon::now(),
        'date_upd' => Carbon::now(),
    ];
});

$factory->define(OrderInvoice::class, function(Generator $faker) {
    $total_paid =  $faker->randomFloat(2, 15, 120);
    $total_paid_tax_excl = $total_paid / 1.21;
    $pay_shipping = $total_paid <= 25;
    $total_shipping = $pay_shipping ? 2.95 : 0.00;
    $total_products = $total_paid - $total_shipping;
    $total_products_wt = $total_products * 1.21;

    return [
        'id_order' => null,
        'number' => $faker->randomNumber(4),
        'delivery_number' => 0,
        'delivery_date' => null,
        'total_discount_tax_incl' => 0,
        'total_discount_tax_excl' => 0,
        'total_paid_tax_incl' => $total_paid,
        'total_paid_tax_excl' => $total_paid_tax_excl,
        'total_products' => $total_products,
        'total_products_wt' => $total_products_wt,
        'total_shipping_tax_incl' => $total_shipping,
        'total_shipping_tax_excl' => $total_shipping,
        'shipping_tax_computation_method' => 0,
        'total_wrapping_tax_incl' => 0,
        'total_wrapping_tax_excl' => 0,
        'note' => '',
        'date_add' => Carbon::now(),
    ];
});

$factory->define(Order::class, function(Generator $faker) {
    $same_address = $faker->boolean(80);
    $id_customer = factory(Customer::class)->create()->id_customer;
    $id_address_delivery = factory(Address::class)->create([
        'id_customer' => $id_customer
    ])->id_address;

    $id_address_invoice = $same_address ? $id_address_delivery : factory(Address::class)->create([
        'id_customer' => $id_customer
    ])->id_address;

    $total_paid =  $faker->randomFloat(2, 15, 120);
    $total_paid_tax_excl = $total_paid / 1.21;
    $pay_shipping = $total_paid <= 25;
    $total_shipping = $pay_shipping ? 2.95 : 0.00;
    $total_products = $total_paid - $total_shipping;
    $total_products_wt = $total_products * 1.21;

    return [
        'reference' => $faker->numerify('########'),
        'id_shop_group' => 1,
        'id_shop' => 4,
        'id_carrier' => 34,
        'id_lang' => 7,
        'id_customer' => $id_customer,
        'id_cart' => $faker->numberBetween(0, 9999999),
        'id_order_docdata' => $faker->numerify('#####-######'),
        'id_currency' => 2,
        'id_address_delivery' => $id_address_delivery,
        'id_address_invoice' => $id_address_invoice,
        'current_state' => 3,
        'secure_key' => md5($faker->text),
        'payment' => $faker->randomElement(config('prestashop.seeder.payment_methods')),
        'conversion_rate' => 1,
        'module' => 'docdatapayments',
        'recyclable' => 0,
        'gift' => 0,
        'gift_message' => '',
        'mobile_theme' => 0,
        'shipping_number' => 0,
        'total_discounts' => 0,
        'total_discounts_tax_incl' => 0,
        'total_discounts_tax_excl' => 0,
        'total_paid' => $total_paid,
        'total_paid_tax_incl' => $total_paid,
        'total_paid_tax_excl' => $total_paid_tax_excl,
        'total_paid_real' => $total_paid,
        'total_products' => $total_products,
        'total_products_wt' => $total_products_wt,
        'total_shipping' => $total_shipping,
        'total_shipping_tax_incl' => $total_shipping,
        'total_shipping_tax_excl' => $total_shipping,
        'carrier_tax_rate' => 21,
        'total_wrapping' => 0,
        'total_wrapping_tax_incl' => 0,
        'total_wrapping_tax_excl' => 0,
        'invoice_number' => 0, // Invoice
        'delivery_number' => 0,
        'invoice_date' => Carbon::now(),
        'delivery_date' => date('Y-m-d H:i:s', 0),
        'valid' => 1,
        'date_add' => Carbon::now(),
        'date_upd' => Carbon::now(),
        'pcid' => $faker->numerify('GeenDocdata-####################.############'),
        'order_message_type' => '',
        'order_message_value' => '',
    ];
});

$factory->define(OrderDetail::class, function(Generator $faker) {
    $order = factory(Order::class)->create();
    $order_invoice = factory(OrderInvoice::class)->create([
        'id_order' => $order->id_order
    ]);
    $order->invoice_number = $order_invoice->id_order_invoice;
    $order->save();

    $package = $faker->numerify($faker->randomElement(config('prestashop.seeder.attribute_options')));

    $product_name = $faker->words(6, true);

    $product_price = $faker->randomFloat(2, 10, 120);

    $product_quantity = $faker->biasedNumberBetween(1, 4, function($n) {
        return $n ** 2;
    });

    return [
        'id_order' => $order->id_order,
        'id_order_invoice' => $order_invoice->id_order_invoice,
        'id_warehouse' => 0,
        'id_shop' => 0,
        'product_id' => $faker->randomNumber(5),
        'product_attribute_id' => $faker->randomNumber(4),
        'product_name' => $product_name . ' - ' . $package,
        'product_combination_name' => $package,
        'product_name_bare' => $product_name,
        'product_name_invoice' => sprintf('<b>%s</b>', $product_name),
        'product_quantity' => $product_quantity,
        'product_quantity_in_stock' => 1,
        'product_quantity_refunded' => 0,
        'product_quantity_return' => 0,
        'product_quantity_reinjected' => 0,
        'product_price' => $product_price,
        'reduction_percent' => 0,
        'reduction_amount' => 0,
        'reduction_amount_tax_incl' => 0,
        'reduction_amount_tax_excl' => 0,
        'group_reduction' => 0,
        'product_quantity_discount' => 0,
        'product_ean13' => $faker->ean13,
        'product_upc' => '',
        'product_reference' => '',
        'product_weight' => $faker->randomNumber(2),
        'tax_computation_method' => 0,
        'tax_name' => '',
        'tax_rate' => 0,
        'ecotax' => 0,
        'ecotax_tax_rate' => 0,
        'discount_quantity_applied' => 0,
        'download_hash' => '',
        'download_nb' => 0,
        'download_deadline' => null,
        'total_price_tax_incl' => $product_price,
        'total_price_tax_excl' => $product_price / 1.21,
        'unit_price_tax_incl' => $product_price / $product_quantity,
        'unit_price_tax_excl' => ($product_price / $product_quantity) / 1.21,
        'total_shipping_price_tax_incl' => 0,
        'total_shipping_price_tax_excl' => 0,
        'purchase_supplier_price' => 0,
        'original_product_price' => ($product_price / $product_quantity) / 1.21,
    ];
});
