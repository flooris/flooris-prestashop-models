<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

class FeatureProduct extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_product';

    protected $primaryKey = ['id_feature', 'id_product'];

    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get product the feature belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    /**
     * Get product the feature belongs to.
     *
     * @return BelongsTo
     */
    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'id_feature', 'id_feature');
    }

    /**
     * Get product the feature belongs to.
     *
     * @return BelongsTo
     */
    public function featureValue(): BelongsTo
    {
        return $this->belongsTo(FeatureValue::class, 'id_feature_value', 'id_feature_value');
    }
}
