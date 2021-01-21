<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Address
 *
 * @package Flooris\Prestashop\Models
 */
class Address extends PrestashopModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'address';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    public $primaryKey = 'id_address';

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
