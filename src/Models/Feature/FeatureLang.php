<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class FeatureLang
 *
 * @property int    $id_feature
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Feature
 */
class FeatureLang extends PrestashopModel
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
    protected $table = 'feature_lang';
    protected $primaryKey = ['id_feature', 'id_lang'];

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
