<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CategoryFeatureValue
 *
 * @property int $id_category_feature_value
 * @property int $id_category
 * @property int $id_feature_value
 * @property int $position
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryFeatureValue extends PrestashopModel
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
    protected $table = 'category_feature_value';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_category_feature_value';

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
     * Get the feature value that the category feature value belongs to.
     *
     * @return BelongsTo
     */
    public function featureValue(): BelongsTo
    {
        return $this->belongsTo(FeatureValue::class, 'id_feature_value', 'id_feature_value');
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
