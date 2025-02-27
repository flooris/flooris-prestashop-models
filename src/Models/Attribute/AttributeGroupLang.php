<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class AttributeGroupLang
 *
 * @property int    $id_attribute_group
 * @property int    $id_lang
 * @property string $name
 * @property string $public_name
 *
 * @package Flooris\Prestashop\Models\Attribute
 */
class AttributeGroupLang extends PrestashopModel
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
    protected $table = 'attribute_group_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_attribute_group', 'id_lang'];
}
