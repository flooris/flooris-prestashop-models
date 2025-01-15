<?php

namespace Flooris\Prestashop\Models\Shop;

use Flooris\Prestashop\Models\Theme;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Category\Category;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id_shop
 * @property int    $id_shop_group
 * @property string $name
 * @property int    $id_category
 * @property int    $id_theme
 * @property int    $active
 * @property int    $deleted
 */
class Shop extends PrestashopModel
{
    protected $table = 'shop';
    protected $primaryKey = 'id_shop';

    public function shopUrl(): HasOne
    {
        return $this->hasOne(ShopUrl::class, 'id_shop');
    }

    public function alternateLanguages(): HasOne
    {
        return $this->hasOne(ShopAlternateLanguages::class, 'id_shop');
    }

    /**
     * Get the shop group that the shop belongs to.
     *
     * @return BelongsTo
     */
    public function shopGroup(): BelongsTo
    {
        return $this->belongsTo(ShopGroup::class, 'id_shop', 'id_shop_group');
    }

    /**
     * Get the category that the shop belongs to.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    /**
     * Get the theme that the shop belongs to.
     *
     * @return BelongsTo
     */
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class, 'id_theme', 'id_theme');
    }
}
