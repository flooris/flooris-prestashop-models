<?php

namespace Flooris\Prestashop\Models\Supplier;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Supplier
 *
 * @property int     $id_supplier
 * @property string  $name
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 * @property boolean $active
 * @property string  $link_rewrite
 *
 * @package Flooris\Prestashop\Models\Supplier
 */
class Supplier extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'supplier';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_supplier';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
        'active'   => 'boolean',
    ];
}
