<?php

namespace Flooris\Prestashop\Models\Product;

use Illuminate\Support\Carbon;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ProductSale
 *
 * @property int    $id_product
 * @property int    $quantity
 * @property int    $sale_nbr
 * @property Carbon $date_upd
 *
 * @package Flooris\Prestashop\Models\Product
 */
class ProductSale extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_sale';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product';

    /**
     * The attributes that should be cast to specific types.
     *
     * @var array
     */
    protected $casts = [
        'date_upd' => 'datetime',
    ];

    /**
     * Get the product that the product sale belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
