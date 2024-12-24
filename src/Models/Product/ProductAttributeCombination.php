<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class ProductAttributeCombination
 *
 * @property int $id_attribute
 * @property int $id_product_attribute
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductAttributeCombination extends PrestashopModel
{
    use CompositeKeyModelTrait, HasPrestashopModelFactoryTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_attribute_combination';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_attribute', 'id_product_attribute'];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
