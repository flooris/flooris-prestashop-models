<?php

namespace Flooris\Prestashop\Models;


/**
 * Class OperatingSystem
 *
 * @property int     $id_web_browser
 * @property ?string $name
 *
 * @package Flooris\Prestashop\Models
 */
class OperatingSystem extends PrestashopModel
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
    protected $table = 'operating_system';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_operating_system';
}
