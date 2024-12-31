<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CategoryGroup
 *
 * @property int $id_category
 * @property int $id_group
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryGroup extends PrestashopModel
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
    protected $table = 'category_group';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_category', 'id_group'];

}
