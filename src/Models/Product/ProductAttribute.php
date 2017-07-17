<?php


namespace Flooris\Prestashop\Models\Product;


use Flooris\Prestashop\Models\PrestashopModel;

class ProductAttribute extends PrestashopModel
{
    protected $primaryKey = 'id_product_attribute';
    protected $table = 'product_attribute';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
