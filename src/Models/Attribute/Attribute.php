<?php

namespace Flooris\Prestashop\Models\Attribute;

use Flooris\Prestashop\Traits\Translatable;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Attribute
 *
 * @package Flooris\Prestashop\Models\Attribute
 */
class Attribute extends PrestashopModel
{
    use Translatable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attribute';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_attribute';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the group the attribute belongs to.
     *
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(AttributeGroup::class, 'id_attribute_group', 'id_attribute_group');
    }

    /**
     * Get feature value translations
     *
     * @return HasMany
     */
    public function translations(): HasMany
    {
        return $this->hasMany(AttributeLang::class, 'id_attribute');
    }
}
