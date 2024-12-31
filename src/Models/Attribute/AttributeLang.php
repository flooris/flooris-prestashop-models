<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class AttributeLang
 *
 * @property int    $id_attribute
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Attributes
 */
class AttributeLang extends PrestashopModel
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
    protected $table = 'attribute_lang';
    protected $primaryKey = ['id_attribute', 'id_lang'];

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
