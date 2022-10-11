<?php

namespace Flooris\Prestashop\Models\Feature;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

class FeatureValueLang extends \Flooris\Prestashop\Models\PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_value_lang';

    protected $primaryKey = ['id_feature_value', 'id_lang'];

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
    public function featureValue(): BelongsTo
    {
        return $this->belongsTo(FeatureValue::class, 'id_feature_value', 'id_feature_value');
    }
}
