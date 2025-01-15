<?php

namespace Flooris\Prestashop\Models\Zone;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ZoneShop
 *
 * @property int $id_zone
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Zone
 */
class ZoneShop extends PrestashopModel
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
    protected $table = 'zone_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_zone', 'id_shop'];
}
