<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ProductAttributeImage
 *
 * @property int $id_product_attribute
 * @property int $id_image
 *
 * @package Flooris\Prestaimage\Models\Product
 */
class ProductAttributeImage extends PrestashopModel
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
    protected $table = 'product_attribute_image';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_product_attribute', 'id_image'];
}
