<?php

namespace Flooris\Prestashop\Models\Order;

use DB;
use Flooris\Prestashop\Models\Address;
use Flooris\Prestashop\Models\CartRule;
use Flooris\Prestashop\Models\Customer;
use Illuminate\Database\Query\JoinClause;
use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Order
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Order extends PrestashopModel
{

    public $timestamps = false;
    protected $primaryKey = 'id_order';
    protected $dates = [
        'invoice_date',
        'delivery_date',
        'date_add',
        'date_upd',
    ];

    public function address_invoice()
    {
        return $this->belongsTo(Address::class, 'id_address_invoice');
    }

    public function address_delivery()
    {
        return $this->belongsTo(Address::class, 'id_address_delivery');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function products()
    {
        return $this->hasMany(OrderDetail::class, 'id_order');
    }

    public function cart_rules()
    {
        return $this->belongsToMany(CartRule::class, 'order_cart_rule', $this->primaryKey, 'id_cart_rule');
    }

    public function invoice()
    {
        return $this->hasOne(OrderInvoice::class, 'id_order', 'id_order');
    }

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

    public function getOrderPaymentsAttribute()
    {
        return DB::table('order_payment')
            ->where('order_reference', $this->reference)
            ->get();
    }

    public function getTotalWeightAttribute()
    {
        return $this->products->sum('weight');
    }
}
