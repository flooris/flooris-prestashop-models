<?php

namespace Flooris\Prestashop\Models\Product;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ProductSaleGrade
 *
 * @property int    $id_product
 * @property int    $id_shop
 * @property int    $sum_sold
 * @property int    $id_order_from
 * @property Carbon $date_from
 * @property int    $sale_grade
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductSaleGrade extends PrestashopModel
{
    use CompositeKeyModelTrait;

    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_sale_grade';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_product', 'id_shop'];
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_from' => 'datetime',
    ];
}
