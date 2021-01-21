<?php

namespace Flooris\Prestashop\Models;

use Flooris\Prestashop\Models\Order\Order;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Customer
 *
 * @package Flooris\Prestashop\Models
 */
class Customer extends PrestashopModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    public $primaryKey = 'id_customer';

    /**
     * Get the orders of the customer.
     *
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'id_customer');
    }
}
