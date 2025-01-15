<?php

namespace Flooris\Prestashop\Models\Currency;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Currency
 *
 * @property int     $id_currency
 * @property string  $name
 * @property string  $iso_code
 * @property string  $iso_code_num
 * @property string  $sign
 * @property boolean $blank
 * @property boolean $format
 * @property boolean $decimals
 * @property float   $conversion_rate
 * @property boolean $deleted
 * @property boolean $active
 *
 * @package Flooris\Prestashop\Models\Currency
 */
class Currency extends PrestashopModel
{
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
    protected $table = 'currency';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_currency';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'blank'           => 'boolean',
        'format'          => 'boolean',
        'decimals'        => 'boolean',
        'conversion_rate' => 'float',
        'deleted'         => 'boolean',
        'active'          => 'boolean',
    ];
}
