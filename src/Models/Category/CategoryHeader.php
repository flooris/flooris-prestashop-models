<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CategoryHeader
 *
 * @property int    $id_category_header
 * @property int    $id_category
 * @property string $content
 * @property int    $id_shop
 * @property ?int   $position
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryHeader extends PrestashopModel
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
    protected $table = 'category_header';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_category_header';

    /**
     * Get the category that the category header belongs to.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    /**
     * Get the shop that the category header belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }
}
