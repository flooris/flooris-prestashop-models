<?php

namespace Flooris\Prestashop\Models\Contact;

use Flooris\Prestashop\Models\PrestashopModel;

/**
 * Class Contact
 *
 * @property int     $id_contact
 * @property string  $email
 * @property boolean $customer_service
 * @property int     $position
 *
 * @package Flooris\Prestashop\Models\Contact
 */
class Contact extends PrestashopModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_contact';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'customer_service' => 'boolean',
    ];
}
