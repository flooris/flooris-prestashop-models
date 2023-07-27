<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductLang extends PrestashopModel
{
    use CompositeKeyModelTrait;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = null;

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = null;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_lang';

    protected $primaryKey = ['id_product', 'id_lang'];

    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get product the feature belongs to.
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
