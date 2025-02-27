<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class FeatureValueLang
 *
 * @property int    $id_feature_value
 * @property int    $id_lang
 * @property string $value
 *
 * @package Flooris\Prestashop\Models\Feature
 */
class FeatureValueLang extends PrestashopModel
{
    use CompositeKeyModelTrait;

    public $incrementing = false;
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
    protected $table = 'feature_value_lang';
    protected $primaryKey = ['id_feature_value', 'id_lang'];

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
