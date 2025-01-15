<?php

namespace Flooris\Prestashop\Models\Contact;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ContactShop
 *
 * @property int $id_contact
 * @property int $id_shop
 *
 * @package Flooris\Prestashop\Models\Contact
 */
class ContactShop extends PrestashopModel
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
    protected $table = 'contact_shop';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_contact', 'id_shop'];
}
