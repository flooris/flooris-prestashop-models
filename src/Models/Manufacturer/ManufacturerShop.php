<?php

namespace Flooris\Prestashop\Models\Manufacturer;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ManufacturerShop
 *
 * @property int $id_manufacturer
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Manufacturer
 */
class ManufacturerShop extends PrestashopModel
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
    protected $table = 'manufacturer_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_manufacturer', 'id_shop'];
}
