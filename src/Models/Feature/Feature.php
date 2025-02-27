<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Traits\Translatable;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Feature
 *
 * @property int $id_feature
 * @property int $position
 *
 * @package Flooris\Prestashop\Models\Feature
 */
class Feature extends PrestashopModel
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
    protected $table = 'feature';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_feature';

    /**
     * Get feature value translations
     *
     * @return HasMany
     */
    public function translations(): HasMany
    {
        return $this->hasMany(FeatureLang::class, 'id_feature');
    }

}
