<?php

namespace App\Models;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class OrderShipmentStatus
 *
 * @property int         $id
 * @property int         $id_order
 * @property int|null    $id_logistics_user
 * @property string      $barcode
 * @property string      $file_path
 * @property string      $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $delivered_date
 * @property string|null $returned_date
 * @property string|null $invited_date

 * @package Flooris\Prestashop\Models\Order
 */
class OrderShipmentStatus extends PrestashopModel
{
    protected $table = 'order_shipment_status';
}
