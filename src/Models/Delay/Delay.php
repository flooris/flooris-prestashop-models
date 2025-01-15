<?php

namespace Flooris\Prestashop\Models\Delay;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Delay
 *
 * @property int $id_delay
 *
 * @package Flooris\Prestashop\Models\Delay
 */
class Delay extends PrestashopModel
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
    protected $table = 'delay';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_delay';
}
