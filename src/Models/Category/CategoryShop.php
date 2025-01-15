<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CategoryShop
 *
 * @property int $id_category
 * @property int $id_shop
 * @property int $position
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryShop extends PrestashopModel
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
    protected $table = 'category_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_category', 'id_shop'];
}
