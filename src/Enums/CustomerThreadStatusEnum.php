<?php

namespace Flooris\Prestashop\Enums;

enum CustomerThreadStatusEnum: string
{
    case OPEN = 'open';
    case CLOSED = 'closed';
    case PENDING1 = 'pending1';
    case PENDING2 = 'pending2';
}
