<?php

namespace Flooris\Prestashop\Enums;

enum ProductShopVisibilityEnum: string
{
    case BOTH = 'both';
    case CATALOG = 'catalog';
    case SEARCH = 'search';
    case NONE = 'none';
}
