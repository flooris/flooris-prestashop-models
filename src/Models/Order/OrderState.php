<?php

namespace Flooris\Prestashop\Models\Order;

use App\Models\OrderStateLanguage;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class OrderState
 *
 * @property int     $id_order_state
 * @property boolean $invoice
 * @property boolean $send_email
 * @property string  $module_name
 * @property string  $color
 * @property boolean $unremovable
 * @property boolean $hidden
 * @property boolean $logable
 * @property boolean $delivery
 * @property boolean $shipped
 * @property boolean $paid
 * @property boolean $pdf_delivery
 * @property boolean $deleted
 * @property int     $position
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderState extends PrestashopModel
{

    public $table = 'order_state';

    public $primaryKey = 'id_order_state';

    protected $casts = [
        'invoice'      => 'boolean',
        'send_email'   => 'boolean',
        'unremovable'  => 'boolean',
        'hidden'       => 'boolean',
        'logable'      => 'boolean',
        'delivery'     => 'boolean',
        'shipped'      => 'boolean',
        'paid'         => 'boolean',
        'pdf_delivery' => 'boolean',
        'deleted'      => 'boolean',
    ];

    public function languages(): HasMany
    {
        return $this->hasMany(OrderStateLanguage::class, 'id_order_state', 'id_order_state');
    }

    public function getTranslationName(int $id_lang)
    {
        return OrderStateLanguage::query()
            ->where('id_order_state', $this->id_order_state)
            ->where('id_lang', $id_lang)
            ->first();
    }

}
