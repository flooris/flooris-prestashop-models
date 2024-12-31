<?php

namespace Flooris\Prestashop\Models\Supplier;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class SupplierShop
 *
 * @property int $id_supplier
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Supplier
 */
class SupplierShop extends PrestashopModel
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
    protected $table = 'supplier_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_supplier', 'id_shop'];
}
