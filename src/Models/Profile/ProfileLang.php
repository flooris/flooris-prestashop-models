<?php

namespace Flooris\Prestashop\Models\Profile;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ProfileLang
 *
 * @property int    $id_lang
 * @property int    $id_profile
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Profile
 */
class ProfileLang extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profile_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_profile', 'id_lang'];
}
