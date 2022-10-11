<?php

namespace Flooris\Prestashop\Models\Attribute;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

class AttributeLang extends \Flooris\Prestashop\Models\PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attribute_lang';

    protected $primaryKey = ['id_attribute', 'id_lang'];

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
    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class, 'id_attribute', 'id_attribute');
    }
}
