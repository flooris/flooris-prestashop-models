<?php

namespace Flooris\Prestashop\Models;


/**
 * Class Alias
 *
 * @property int     $id_alias
 * @property string  $alias
 * @property string  $search
 * @property boolean $active
 *
 * @package Flooris\Prestashop\Models
 */
class Alias extends PrestashopModel
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
    protected $table = 'alias';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_alias';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];
}
