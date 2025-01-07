<?php

namespace Flooris\Prestashop\Models;

use Flooris\Prestashop\Models\Country\Country;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Address
 *
 * @package Flooris\Prestashop\Models
 */
class Address extends PrestashopModel
{
    use HasPrestashopModelFactoryTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'address';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_address';

    /**
     * Get the country the address belongs to.
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'id_country');
    }
}
