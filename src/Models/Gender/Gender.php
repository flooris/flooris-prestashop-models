<?php

namespace Flooris\Prestashop\Models\Gender;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Gender
 *
 * @property int     $id_gender
 * @property boolean $type
 *
 * @package Flooris\Prestashop\Models\Gender
 */
class Gender extends PrestashopModel
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
    protected $table = 'gender';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_gender';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'boolean',
    ];
}
