<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Enums\GroupTypeEnum;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class AttributeGroup
 *
 * @property int    $id_attribute_group
 * @property int    $is_color_group
 * @property string $group_type
 * @property int    $position
 *
 * @package Flooris\Prestashop\Models\Attribute
 */
class AttributeGroup extends PrestashopModel
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
    protected $table = 'attribute_group';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_attribute_group';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'group_type' => GroupTypeEnum::class,
    ];
}
