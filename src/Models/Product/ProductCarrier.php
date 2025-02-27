<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ProductCarrier
 *
 * @property int $id_product
 * @property int $id_carrier_reference
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductCarrier extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_carrier';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_product', 'id_carrier_reference', 'id_shop'];
}
