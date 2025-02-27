<?php

namespace Flooris\Prestashop\Models\Tax;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Tax
 *
 * @property int     $id_tax
 * @property float   $rate
 * @property boolean $active
 * @property boolean $deleted
 *
 * @package Flooris\Prestashop\Models\Tax
 */
class Tax extends PrestashopModel
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
    protected $table = 'tax';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_tax';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active'  => 'boolean',
        'deleted' => 'boolean',
        'rate'    => 'float',
    ];
}
