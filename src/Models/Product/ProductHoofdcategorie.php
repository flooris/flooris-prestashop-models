<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ProductHoofdcategorie
 *
 * @property int     $id_product
 * @property int     $id_shop
 * @property int     $id_category
 * @property ?string $name
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductHoofdcategorie extends PrestashopModel
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
    protected $table = 'product_hoofdcategorie';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_product', 'id_shop', 'id_category'];
}
