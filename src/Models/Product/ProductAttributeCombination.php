<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;

class ProductAttributeCombination extends PrestashopModel
{

    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'product_attribute_combination';

}
