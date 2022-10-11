<?php

namespace Flooris\Prestashop\Models\Feature;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

class FeatureLang extends \Flooris\Prestashop\Models\PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_lang';

    protected $primaryKey = ['id_feature', 'id_lang'];

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
    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'id_feature', 'id_feature');
    }
}
