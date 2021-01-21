<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\CartRule;
use Flooris\Prestashop\Models\Customer;
use Illuminate\Database\Query\JoinClause;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Order
 *
 * @package Flooris\Prestashop\Models\Order
 */
class Order extends PrestashopModel
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'invoice_date' => 'datetime',
        'delivery_date' => 'datetime',
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
    ];

    /**
     * Get the invoice address that owns the order.
     *
     * @return BelongsTo
     */
    public function address_invoice(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'id_address_invoice');
    }

    /**
     * Get the delivery address that the order belongs to.
     *
     * @return BelongsTo
     */
    public function address_delivery(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'id_address_delivery');
    }

    /**
     * Get the customer that the order belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    /**
     * Get the products for the order.
     *
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'id_order');
    }

    /**
     * Get the cart rules that the order belongs to.
     *
     * @return BelongsToMany
     */
    public function cart_rules(): BelongsToMany
    {
        return $this->belongsToMany(CartRule::class, 'order_cart_rule', $this->primaryKey, 'id_cart_rule');
    }

    /**
     * Get the invoice for the order.
     *
     * @return HasOne
     */
    public function invoice(): HasOne
    {
        return $this->hasOne(OrderInvoice::class, 'id_order', 'id_order');
    }

    /**
     * Get the name of the carrier.
     *
     * @return mixed|null
     */
    public function getCarrierNameAttribute()
    {
        return DB::table('orders AS o')
            ->leftJoin('order_history AS oh', 'oh.id_order', 'o.id_order')
            ->leftJoin('order_carrier AS oc', 'oc.id_order', 'o.id_order')
            ->leftJoin('carrier AS c', 'c.id_carrier', 'oc.id_carrier')
            ->leftJoin('order_state_lang AS osl', function(JoinClause $clause) {
                $clause->on('osl.id_order_state', 'oh.id_order_state');
                $clause->on('osl.id_lang', 'o.id_lang');
            })
            ->where('o.id_order', $this->id_order)
            ->value('c.name');
    }

    /**
     * Get the order payments
     *
     * @return Collection
     */
    public function getOrderPaymentsAttribute(): Collection
    {
        return DB::table('order_payment')
            ->where('order_reference', $this->reference)
            ->get();
    }

    /**
     * Get the total weight of the order.
     *
     * @return mixed
     */
    public function getTotalWeightAttribute()
    {
        return $this->products->sum('weight');
    }
}
