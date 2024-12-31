<?php

namespace Flooris\Prestashop\Models\Risk;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Risk
 *
 * @property int    $id_risk
 * @property int    $percent
 * @property string $color
 *
 * @package Flooris\Prestashop\Models\Risk
 */
class Risk extends PrestashopModel
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
    protected $table = 'risk';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_risk';
}
