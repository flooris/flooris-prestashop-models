<?php

namespace Flooris\Prestashop\Models\Group;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Group
 *
 * @property int     $id_group
 * @property float   $reduction
 * @property boolean $price_display_method
 * @property boolean $show_prices
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 *
 * @package Flooris\Prestashop\Models\Group
 */
class Group extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'group';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_group';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'reduction'            => 'float',
        'price_display_method' => 'boolean',
        'show_prices'          => 'boolean',
        'date_add'             => 'datetime',
        'date_upd'             => 'datetime',
    ];
}
