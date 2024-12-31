<?php

namespace Flooris\Prestashop\Models\Carrier;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CarrierZone
 *
 * @property int $id_carrier
 * @property int $id_zone
 *
 * @package Flooris\Prestashop\Models\Carrier
 */
class CarrierZone extends PrestashopModel
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
    protected $table = 'carrier_zone';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_carrier', 'id_zone'];

}
