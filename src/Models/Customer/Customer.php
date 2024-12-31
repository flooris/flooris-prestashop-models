<?php

namespace Flooris\Prestashop\Models\Customer;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Shop\Shop;
use Flooris\Prestashop\Models\Risk\Risk;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\Group\Group;
use Flooris\Prestashop\Models\Gender\Gender;
use Flooris\Prestashop\Models\Shop\ShopGroup;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Traits\HasPrestashopModelFactoryTrait;

/**
 * Class Customer
 *
 * @property int     $id_customer
 * @property int     $id_shop_group
 * @property int     $id_shop
 * @property int     $id_gender
 * @property int     $id_default_group
 * @property int     $id_lang
 * @property int     $id_risk
 * @property string  $company
 * @property string  $siret
 * @property string  $ape
 * @property string  $firstname
 * @property string  $lastname
 * @property string  $email
 * @property string  $passwd
 * @property Carbon  $last_passwd_gen
 * @property Carbon  $birthday
 * @property boolean $newsletter
 * @property string  $ip_registration_newsletter
 * @property Carbon  $newsletter_date_add
 * @property boolean $optin
 * @property string  $website
 * @property float   $outstanding_allow_amount
 * @property boolean $show_public_prices
 * @property int     $max_payment_days
 * @property string  $secure_key
 * @property string  $note
 * @property boolean $active
 * @property boolean $is_guest
 * @property boolean $deleted
 * @property Carbon  $date_add
 * @property Carbon  $date_upd
 *
 * @package Flooris\Prestashop\Models
 */
class Customer extends PrestashopModel
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_customer';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'last_passwd_gen'          => 'datetime',
        'birthday'                 => 'datetime',
        'newsletter'               => 'boolean',
        'newsletter_date_add'      => 'datetime',
        'optin'                    => 'boolean',
        'outstanding_allow_amount' => 'float',
        'show_public_prices'       => 'boolean',
        'active'                   => 'boolean',
        'is_guest'                 => 'boolean',
        'deleted'                  => 'boolean',
        'date_add'                 => 'datetime',
        'date_upd'                 => 'datetime',
    ];

    /**
     * Get the orders of the customer.
     *
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'id_customer');
    }

    /**
     * Get the shop group that the customer belongs to.
     *
     * @return BelongsTo
     */
    public function shopGroup(): BelongsTo
    {
        return $this->belongsTo(ShopGroup::class, 'id_shop_group', 'id_shop_group');
    }

    /**
     * Get the shop that the shop belongs to.
     *
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'id_shop', 'id_shop');
    }

    /**
     * Get the gender that the customer belongs to.
     *
     * @return BelongsTo
     */
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'id_gender', 'id_gender');
    }

    /**
     * Get the group that the customer belongs to.
     *
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'id_default_group', 'id_group');
    }

    /**
     * Get the lang that the customer belongs to.
     *
     * @return BelongsTo
     */
    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'id_lang', 'id_lang');
    }

    /**
     * Get the risk that the customer belongs to.
     *
     * @return BelongsTo
     */
    public function risk(): BelongsTo
    {
        return $this->belongsTo(Risk::class, 'id_risk', 'id_risk');
    }
}
