<?php

namespace Flooris\Prestashop\Models\Order;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * @property int         $id_order_payment
 * @property string|null $order_reference
 * @property int         $id_currency
 * @property float       $amount
 * @property string      $payment_method
 * @property float       $conversion_rate
 * @property string|null $transaction_id
 * @property string|null $card_number
 * @property string|null $card_brand
 * @property string|null $card_expiration
 * @property string|null $card_holder
 * @property string      $date_add
 */
class OrderPayment extends PrestashopModel
{
    protected $table = 'order_payment';

    public static function findByReference($reference): ?OrderPayment
    {
        /** @var ?OrderPayment $output */
        $output = self::query()->where('order_reference', $reference)->first();
        return $output;
    }
}
