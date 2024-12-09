<?php

namespace Flooris\Prestashop\Models\Product;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * Class ProductLang
 *
 * @property int         $id_product
 * @property int         $id_shop
 * @property int         $id_lang
 * @property string|null $description
 * @property string|null $description_short
 * @property string      $link_rewrite
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string|null $meta_title
 * @property string      $name
 * @property string|null $available_now
 * @property string|null $available_later
 * @property string|null $reorder_unavailable_message
 * @property string|null $special_note
 * @property string|null $special_note_color
 * @property string|null $special_note_color_applied_to
 * @property string|null $special_note_icon
 *
 * @package Flooris\Prestashop\Models\Product
 */
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
