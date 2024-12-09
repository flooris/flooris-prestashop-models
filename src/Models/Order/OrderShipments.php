<?php

namespace App\Models;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class OrderShipmentStatus
 *
 * @property int    $id_order_shipment
 * @property int    $id_order
 * @property int    $id_customer
 * @property string $email_address
 * @property string $track_and_trace
 * @property int    $is_processed
 *
 * @package Flooris\Prestashop\Models\Order
 */
class OrderShipments extends PrestashopModel
{
    public $table = 'order_shipments';

    public $primaryKey = 'id_order_shipment';

}
