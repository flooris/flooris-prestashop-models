<?php

namespace Flooris\Prestashop\Models\Feature;

use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Traits\Translatable;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feature extends PrestashopModel
{
    use Translatable;

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
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get feature value translations
     *
     * @return BelongsTo
     */
    public function translations(): HasMany
    {
        return $this->hasMany(FeatureLang::class, 'id_feature');
    }

}
