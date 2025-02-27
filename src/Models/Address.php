<?php

namespace Flooris\Prestashop\Models;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Country\Country;
use Flooris\Prestashop\Models\Supplier\Supplier;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Manufacturer\Manufacturer;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Address
 *
 * @property int     $id_address
 * @property int     $id_country
 * @property int     $id_state
 * @property int     $id_customer
 * @property int     $id_manufacturer
 * @property int     $id_supplier
 * @property int     $id_warehouse
 * @property string  $alias
 * @property string  $company
 * @property string  $lastname
 * @property string  $firstname
 * @property string  $address1
 * @property string  $house_number
 * @property string  $address2
 * @property string  $postcode
 * @property string  $city
 * @property string  $other
 * @property string  $phone
 * @property string  $phone_mobile
 * @property string  $vat_number
 * @property string  $dni
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 * @property boolean $active
 * @property boolean $deleted
 *
 * @package Flooris\Prestashop\Models
 */
class Address extends PrestashopModel
{


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
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
        'active'   => 'boolean',
        'deleted'  => 'boolean',
    ];

    /**
     * Get the country the address belongs to.
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'id_country');
    }

    /**
     * Get the state that the address belongs to.
     *
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'id_state', 'id_state');
    }

    /**
     * Get the customer the address belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    /**
     * Get the manufacturer the address belongs to.
     *
     * @return BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'id_manufacturer', 'id_manufacturer');
    }

    /**
     * Get the supplier the address belongs to.
     *
     * @return BelongsTo
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }

    /**
     * Get the warehouse the address belongs to.
     *
     * @return BelongsTo
     */
    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'id_warehouse', 'id_warehouse');
    }
}
