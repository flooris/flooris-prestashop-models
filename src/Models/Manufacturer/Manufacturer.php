<?php

namespace Flooris\Prestashop\Models\Manufacturer;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Feature\FeatureValue;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Manufacturer
 *
 * @property int     $id_manufacturer
 * @property string  $name
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 * @property boolean $active
 * @property string  $link_rewrite
 * @property int     $id_feature_value
 *
 * @package Flooris\Prestashop\Models\Manufacturer
 */
class Manufacturer extends PrestashopModel
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_manufacturer';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
        'active'   => 'boolean',
    ];

    /**
     * Get the feature value that the manufacturer belongs to.
     *
     * @return BelongsTo
     */
    public function featureValue(): BelongsTo
    {
        return $this->belongsTo(FeatureValue::class, 'id_feature_value', 'id_feature_value');
    }
}
