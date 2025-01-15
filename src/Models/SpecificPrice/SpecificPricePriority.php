<?php

namespace Flooris\Prestashop\Models\SpecificPrice;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class SpecificPricePriority
 *
 * @property int    $id_specific_price_priority
 * @property int    $id_product
 * @property string $priority
 *
 * @package Flooris\Prestashop\Models\SpecificPrice
 */
class SpecificPricePriority extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'specific_price_priority';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_specific_price_priority', 'id_product'];
}
