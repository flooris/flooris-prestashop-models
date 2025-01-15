<?php

namespace Flooris\Prestashop\Models\Order;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int     $id_order_payment
 * @property ?string $order_reference
 * @property int     $id_currency
 * @property float   $amount
 * @property string  $payment_method
 * @property float   $conversion_rate
 * @property ?string $transaction_id
 * @property ?string $card_number
 * @property ?string $card_brand
 * @property ?string $card_expiration
 * @property ?string $card_holder
 * @property Carbon  $date_add
 */
class OrderPayment extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_payment';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_order_payment';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'amount'          => 'float',
        'conversion_rate' => 'float',
        'date_add'        => 'datetime',
    ];

    public static function findByReference($reference): ?OrderPayment
    {
        /** @var ?OrderPayment $output */
        $output = self::query()->where('order_reference', $reference)->first();

        return $output;
    }

    /**
     * Get the currency the order payment belongs to.
     *
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id_currency', 'id_currency');
    }
}
