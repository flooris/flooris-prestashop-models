<?php

namespace Flooris\Prestashop\Models\Zone;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Zone
 *
 * @property int     $id_zone
 * @property string  $name
 * @property boolean $active
 *
 * @package Flooris\Prestashop\Models\Zone
 */
class Zone extends PrestashopModel
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
    protected $table = 'zone';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_zone';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];
}
