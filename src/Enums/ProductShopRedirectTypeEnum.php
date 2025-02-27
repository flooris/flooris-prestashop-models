<?php

namespace Flooris\Prestashop\Enums;

enum ProductShopRedirectTypeEnum: string
{
    case EMPTY = '';
    case CODE_404 = '404';
    case CODE_301 = '301';
    case CODE_302 = '302';
}
