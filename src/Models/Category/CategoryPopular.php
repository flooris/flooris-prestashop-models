<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CategoryPopular
 *
 * @property int  $id_category_popular
 * @property int  $id_shop
 * @property int  $id_category
 * @property int  $id_parent
 * @property ?int $position
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryPopular extends PrestashopModel
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
    protected $table = 'category_popular';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_category_popular';

    /**
     * Get the category that the category feature value belongs to.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    /**
     * Get the parent category that the category popular belongs to.
     *
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_parent', 'id_category');
    }

    /**
     * Get the shop that the category feature value belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }
}
