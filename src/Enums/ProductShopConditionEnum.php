<?php

namespace Flooris\Prestashop\Enums;

enum ProductShopConditionEnum: string
{
    case NEW = 'new';
    case USED = 'used';
    case REFURBISHED = 'refurbished';
}
