<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Traits\Translatable;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FeatureValue
 *
 * @property int      $id_feature_value
 * @property int      $id_feature
 * @property ?boolean $custom
 *
 * @package Flooris\Prestashop\Models\Feature
 */
class FeatureValue extends PrestashopModel
{
    use Translatable;

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
    protected $table = 'feature_value';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_feature_value';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'custom' => 'boolean',
    ];

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
     * @return HasMany
     */
    public function translations(): HasMany
    {
        return $this->hasMany(FeatureValueLang::class, 'id_feature_value');
    }
}
