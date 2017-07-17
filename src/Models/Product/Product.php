<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\Category;
use Flooris\Prestashop\Models\Manufacturer;
use Flooris\Prestashop\Models\PrestashopModel;

class Product extends PrestashopModel
{

    protected $primaryKey = 'id_product';
    protected $table = 'product';

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category_default', 'id_category');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'id_manufacturer', 'id_manufacturer');
    }

}
