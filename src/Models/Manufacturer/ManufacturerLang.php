<?php

namespace Flooris\Prestashop\Models\Manufacturer;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ManufacturerLang
 *
 * @property int     $id_manufacturer
 * @property int     $id_lang
 * @property ?string $description
 * @property ?string $short_description
 * @property ?string $meta_title
 * @property ?string $meta_keywords
 * @property ?string $meta_description
 *
 * @package Flooris\Prestashop\Models\Manufacturer
 */
class ManufacturerLang extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturer_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_manufacturer', 'id_lang'];
}
