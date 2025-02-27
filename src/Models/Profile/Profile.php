<?php

namespace Flooris\Prestashop\Models\Profile;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Profile
 *
 * @property int $id_profile
 *
 * @package Flooris\Prestashop\Models\Profile
 */
class Profile extends PrestashopModel
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
    protected $table = 'profile';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_profile';
}
