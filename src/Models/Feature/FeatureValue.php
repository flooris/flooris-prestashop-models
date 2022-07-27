<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeatureValue extends \Flooris\Prestashop\Models\PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_value';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_feature_value';

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
    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'id_feature', 'id_feature');
    }
}
