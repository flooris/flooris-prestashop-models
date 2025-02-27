<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CategoryFilter
 *
 * @property int     $id_category_filter
 * @property int     $id_shop
 * @property int     $id_category
 * @property int     $position
 * @property ?string $attribute_name
 * @property string  $filter_header
 * @property string  $filter_type
 * @property int     $limit
 * @property int     $is_open
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryFilter extends PrestashopModel
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
    protected $table = 'category_filter';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_category_filter';

    /**
     * Get the shop that the category filter belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the category that the category filter belongs to.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }
}
