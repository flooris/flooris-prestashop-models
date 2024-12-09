<?php

namespace App\Models;

use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    use HasFactory;

    public $table = 'order_payment';

    public static function findByReference($reference): ?OrderPayment
    {
        return self::query()->where('order_reference', $reference)->first();
    }
}
