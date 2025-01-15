<?php

namespace Flooris\Prestashop\Enums;

enum OrderShipmentStatusEnum: string
{
    case READY_FOR_SHIPMENT = 'ready-for-shipment';
    case SHIPPED = 'shipped';
    case BACKORDER = 'backorder';
}
