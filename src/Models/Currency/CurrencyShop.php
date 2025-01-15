<?php

namespace Flooris\Prestashop\Models\Currency;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CurrencyShop
 *
 * @property int   $id_currency
 * @property int   $id_shop
 * @property float $conversion_rate
 *
 * @package Flooris\Prestashop\Models\Currency
 */
class CurrencyShop extends PrestashopModel
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
    protected $table = 'currency_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_currency', 'id_shop'];
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'conversion_rate' => 'float',
    ];
}
