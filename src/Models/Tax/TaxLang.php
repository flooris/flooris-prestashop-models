<?php


namespace Flooris\Prestashop\Models\Tax;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class TaxLang
 *
 * @property int    $id_tax
 * @property int    $id_lang
 * @property string $name
 *
 * @package Flooris\Prestashop\Models\Tax
 */
class TaxLang extends PrestashopModel
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
    protected $table = 'tax_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_tax', 'id_lang'];
}
