<?php

namespace Flooris\Prestashop\Database\Factories\Product;

use Carbon\Carbon;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ProductFactory
 *
 * @package Flooris\Prestashop\Database\Factories\Product
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_supplier'               => 0,
            'id_manufacturer'           => 0,
            'id_category_default'       => 0,
            'id_shop_default'           => 1,
            'id_tax_rules_group'        => 1,
            'on_sale'                   => false,
            'online_only'               => false,
            'ean13'                     => $this->faker->ean13,
            'upc'                       => '',
            'ecotax'                    => 0,
            'quantity'                  => 0,
            'minimal_quantity'          => 1,
            'price'                     => $this->faker->randomFloat(2, 1, 140),
            'wholesale_price'           => 0,
            'unity'                     => '',
            'unit_price_ratio'          => 0,
            'additional_shipping_cost'  => 0,
            'reference'                 => $this->faker->bothify('#####-?????'),
            'supplier_reference'        => $this->faker->bothify('#####-?????'),
            'location'                  => '',
            'width'                     => $this->faker->numberBetween(20, 800),
            'height'                    => $this->faker->numberBetween(20, 800),
            'depth'                     => $this->faker->numberBetween(20, 800),
            'weight'                    => $this->faker->numberBetween(0.25, 80),
            'out_of_stock'              => 0,
            'quantity_discount'         => false,
            'customizable'              => false,
            'uploadable_files'          => false,
            'text_fields'               => false,
            'active'                    => true,
            'redirect_type'             => '',
            'id_product_redirected'     => 0,
            'available_for_order'       => true,
            'available_date'            => Carbon::now(),
            'condition'                 => 'new',
            'show_price'                => true,
            'indexed'                   => true,
            'visibility'                => 'both',
            'cache_is_pack'             => false,
            'is_virtual'                => false,
            'cache_default_attribute'   => null,
            'date_add'                  => Carbon::now(),
            'date_upd'                  => Carbon::now(),
            'advanced_stock_management' => false,
        ];
    }
}
