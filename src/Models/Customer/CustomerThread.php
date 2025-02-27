<?php

namespace Flooris\Prestashop\Models\Customer;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Contact\Contact;
use Flooris\Prestashop\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Enums\OrderShipmentStatusEnum;

/**
 * Class CustomerThread
 *
 * @property int    $id_customer_thread
 * @property int    $id_shop
 * @property int    $id_lang
 * @property int    $id_contact
 * @property int    $id_customer
 * @property int    $id_order
 * @property int    $id_product
 * @property string $status
 * @property string $email
 * @property string $token
 * @property Carbon $date_add
 * @property Carbon $date_upd
 *
 * @package Flooris\Prestashop\Models\Customer
 */
class CustomerThread extends PrestashopModel
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
    protected $table = 'customer_thread';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_customer_thread';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_add' => 'datetime',
        'date_upd' => 'datetime',
        'status'   => OrderShipmentStatusEnum::class,
    ];

    /**
     * Get the shop that the customer thread belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the language that the customer thread belongs to.
     *
     * @return BelongsTo
     */
    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'id_lang', 'id_lang');
    }

    /**
     * Get the contact that the customer thread belongs to.
     *
     * @return BelongsTo
     */
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'id_contact', 'id_contact');
    }

    /**
     * Get the customer that the customer thread belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    /**
     * Get the order that the customer thread belongs to.
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    /**
     * Get the product that the customer thread belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
