<?php

namespace Flooris\Prestashop\Models\Category;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Category
 *
 * @property int      $id_category
 * @property int      $id_parent
 * @property int      $id_shop_default
 * @property boolean  $level_depth
 * @property ?boolean $mobile_fold_out
 * @property int      $nleft
 * @property int      $nright
 * @property boolean  $active
 * @property Carbon   $date_add
 * @property Carbon   $date_upd
 * @property int      $position
 * @property boolean  $is_root_category
 * @property boolean  $show_subcategory_products
 * @property boolean  $has_review_priority
 *
 * @package Flooris\Prestashop\Models\Category
 */
class Category extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_category';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'level_depth'               => 'boolean',
        'mobile_fold_out'           => 'boolean',
        'active'                    => 'boolean',
        'date_add'                  => 'datetime',
        'date_upd'                  => 'datetime',
        'is_root_category'          => 'boolean',
        'show_subcategory_products' => 'boolean',
        'has_review_priority'       => 'boolean',
    ];

    /**
     * Get the parent category that the category belongs to.
     *
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_parent', 'id_category');
    }

    /**
     * Get the shop that the category belongs to.
     *
     * @return BelongsTo
     */
    public function shopDefault(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop_default', 'id_shop');
    }
}
