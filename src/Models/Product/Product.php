<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\Category;
use Flooris\Prestashop\Models\Manufacturer;
use Flooris\Prestashop\Models\PrestashopModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 *
 * @package Flooris\Prestashop\Models\Product
 */
class Product extends PrestashopModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_product';


    /**
     * Get category the product belongs to.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category_default', 'id_category');
    }

    /**
     * Get the manufacturer the product belongs to.
     *
     * @return BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'id_manufacturer', 'id_manufacturer');
    }
}
