<?php

namespace Flooris\Prestashop\Models\Country;

use Flooris\Prestashop\Models\Zone\Zone;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Country
 *
 * @property int     $id_country
 * @property int     $id_zone
 * @property int     $id_currency
 * @property string  $iso_code
 * @property int     $call_prefix
 * @property boolean $active
 * @property boolean $contains_states
 * @property boolean $need_identification_number
 * @property boolean $need_zip_code
 * @property string  $zip_code_format
 * @property boolean $display_tax_label
 *
 * @package Flooris\Prestashop\Models\Country
 */
class Country extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_country';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'active'                     => 'boolean',
        'contains_states'            => 'boolean',
        'need_identification_number' => 'boolean',
        'need_zip_code'              => 'boolean',
        'display_tax_label'          => 'boolean',
    ];

    /**
     * Get the currency that the country belongs to.
     *
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id_currency', 'id_currency');
    }

    /**
     * Get the zone that the country belongs to.
     *
     * @return BelongsTo
     */
    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class, 'id_zone', 'id_zone');
    }
}
