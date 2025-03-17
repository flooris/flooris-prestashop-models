<?php

namespace Flooris\Prestashop\Models;

use Flooris\Prestashop\Models\Zone\Zone;
use Flooris\Prestashop\Models\Country\Country;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class State
 *
 * @property int     $id_state
 * @property int     $id_country
 * @property int     $id_zone
 * @property string  $name
 * @property string  $iso_code
 * @property int     $tax_behavior
 * @property boolean $active
 *
 * @package Flooris\Prestashop\Models
 */
class State extends PrestashopModel
{
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
    protected $table = 'state';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_state';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Get the country that the state belongs to.
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'id_country', 'id_country');
    }

    /**
     * Get the zone that the state belongs to.
     *
     * @return BelongsTo
     */
    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class, 'id_zone', 'id_zone');
    }
}
