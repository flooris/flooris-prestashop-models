<?php

namespace Flooris\Prestashop\Models\Group;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class GroupShop
 *
 * @property int $id_group
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Group
 */
class GroupShop extends PrestashopModel
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
    protected $table = 'group_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_group', 'id_shop'];
}
