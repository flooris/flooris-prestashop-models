<?php


namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;

class ProductAttributeShop extends PrestashopModel
{
    public $timestamps = false;

    protected $table = 'product_attribute_shop';

    protected $guarded = [];

    // Set default values for attributes that are rarely filled.
    protected $attributes = [
        'wholesale_price'   => 0,
        'ecotax'            => 0,
        'weight'            => 0,
        'unit_price_impact' => 0,
        'default_on'        => null,
        'available_date'    => '0000-00-00',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
