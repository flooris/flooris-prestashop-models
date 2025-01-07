<?php

namespace Flooris\Prestashop\Models\Manufacturer;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Manufacturer
 *
 * @package Flooris\Prestashop\Models\Manufacturer
 */
class Manufacturer extends PrestashopModel
{
    use HasPrestashopModelFactoryTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_manufacturer';
}
