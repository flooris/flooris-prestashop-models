<?php

namespace Flooris\Prestashop\Models\Group;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class GroupLang
 *
 * @property int    $id_group
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Group
 */
class GroupLang extends PrestashopModel
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
    protected $table = 'group_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_group', 'id_lang'];
}
