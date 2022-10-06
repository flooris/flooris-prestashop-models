<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Traits\Translatable;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeatureValue extends \Flooris\Prestashop\Models\PrestashopModel
{
    use Translatable;

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
     * Get feature the value belongs to.
     *
     * @return BelongsTo
     */
    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'id_feature', 'id_feature');
    }

    /**
     * Get feature translations
     *
     * @return BelongsTo
     */
    public function translations(): HasMany
    {
        return $this->hasMany(FeatureValueLang::class, 'id_feature_value');
    }
}
