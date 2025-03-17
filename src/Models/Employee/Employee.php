<?php

namespace Flooris\Prestashop\Models\Employee;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\Language;
use Flooris\Prestashop\Models\Order\Order;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Profile\Profile;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Customer\CustomerMessage;

/**
 * Class Employee
 *
 * @property int     $id_employee
 * @property int     $id_profile
 * @property int     $id_lang
 * @property string  $lastname
 * @property string  $firstname
 * @property string  $email
 * @property string  $passwd
 * @property Carbon  $last_passwd_gen
 * @property ?Carbon $stats_date_from
 * @property ?Carbon $stats_date_to
 * @property ?Carbon $stats_compare_from
 * @property ?Carbon $stats_compare_to
 * @property int     $stats_compare_option
 * @property ?string $preselect_date_range
 * @property ?string $bo_color
 * @property ?string $bo_theme
 * @property ?string $bo_css
 * @property int     $default_tab
 * @property int     $bo_width
 * @property boolean $bo_menu
 * @property boolean $active
 * @property boolean $optin
 * @property int     $id_last_order
 * @property int     $id_last_customer_message
 * @property int     $id_last_customer
 * @property Carbon  $last_connection_date
 *
 * @package Flooris\Prestashop\Models\Employee
 */
class Employee extends PrestashopModel
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
    protected $table = 'employee';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_employee';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'last_passwd_gen'      => 'timestamp',
        'stats_date_from'      => 'date',
        'stats_date_to'        => 'date',
        'stats_compare_from'   => 'date',
        'stats_compare_to'     => 'date',
        'bo_menu'              => 'boolean',
        'active'               => 'boolean',
        'optin'                => 'boolean',
        'last_connection_date' => 'date',
    ];

    /**
     * Get the profile that the employee belongs to.
     *
     * @return BelongsTo
     */
    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'id_profile', 'id_profile');
    }

    /**
     * Get the lang that the employee belongs to.
     *
     * @return BelongsTo
     */
    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'id_lang', 'id_lang');
    }

    /**
     * Get the last order that the employee belongs to.
     *
     * @return BelongsTo
     */
    public function lastOrder(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id_last_order', 'id_order');
    }

    /**
     * Get the last customer message that the employee belongs to.
     *
     * @return BelongsTo
     */
    public function customerMessage(): BelongsTo
    {
        return $this->belongsTo(CustomerMessage::class, 'id_last_customer_message', 'id_customer_message');
    }

    /**
     * Get the customer that the employee belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_last_customer', 'id_customer');
    }
}
