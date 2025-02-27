<?php

namespace Flooris\Prestashop\Models;


use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Guest
 *
 * @property int      $id_guest
 * @property ?int     $id_operating_system
 * @property ?int     $id_web_browser
 * @property ?int     $id_customer
 * @property ?boolean $javascript
 * @property ?int     $screen_resolution_x
 * @property ?int     $screen_resolution_y
 * @property ?boolean $screen_color
 * @property ?boolean $sun_java
 * @property ?boolean $adobe_flash
 * @property ?boolean $adobe_director
 * @property ?boolean $apple_quicktime
 * @property ?boolean $real_player
 * @property ?boolean $windows_media
 * @property ?string  $accept_language
 * @property boolean  $mobile_theme
 *
 * @package Flooris\Prestashop\Models
 */
class Guest extends PrestashopModel
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
    protected $table = 'guest';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_guest';
    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'javascript'      => 'boolean',
        'screen_color'    => 'boolean',
        'sun_java'        => 'boolean',
        'adobe_flash'     => 'boolean',
        'adobe_director'  => 'boolean',
        'apple_quicktime' => 'boolean',
        'real_player'     => 'boolean',
        'windows_media'   => 'boolean',
        'mobile_theme'    => 'boolean',
    ];

    /**
     * Get the operating system that the guest belongs to.
     *
     * @return BelongsTo
     */
    public function operatingSystem(): BelongsTo
    {
        return $this->belongsTo(OperatingSystem::class, 'id_operating_system', 'id_operating_system');
    }

    /**
     * Get the web browser that the guest belongs to.
     *
     * @return BelongsTo
     */
    public function webBrowser(): BelongsTo
    {
        return $this->belongsTo(WebBrowser::class, 'id_web_browser', 'id_web_browser');
    }

    /**
     * Get the customer that the guest belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
}
