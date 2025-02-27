<?php

namespace Flooris\Prestashop\Models\Supplier;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class SupplierLang
 *
 * @property int     $id_supplier
 * @property int     $id_lang
 * @property ?string $description
 * @property ?string $meta_title
 * @property ?string $meta_keywords
 * @property ?string $meta_description
 *
 * @package Flooris\Prestashop\Models\Supplier
 */
class SupplierLang extends PrestashopModel
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
    protected $table = 'supplier_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_supplier', 'id_lang'];
}
