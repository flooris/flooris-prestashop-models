<?php

namespace Flooris\Prestashop\Models\Carrier;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CarrierLang
 *
 * @property int     $id_carrier
 * @property int     $id_shop
 * @property int     $id_lang
 * @property ?string $delay
 *
 * @package Flooris\Prestashop\Models\Carrier
 */
class CarrierLang extends PrestashopModel
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
    protected $table = 'carrier_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_carrier', 'id_shop', 'id_lang'];

}
