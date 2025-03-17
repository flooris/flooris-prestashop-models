<?php

namespace Flooris\Prestashop\Models\Category;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class CategoryLang
 *
 * @property int     $id_category
 * @property int     $id_shop
 * @property int     $id_lang
 * @property string  $name
 * @property ?string $description
 * @property string  $link_rewrite
 * @property ?string $meta_title
 * @property ?string $meta_keywords
 * @property ?string $meta_description
 * @property ?string $footer_text
 * @property string  $title_short
 *
 * @package Flooris\Prestashop\Models\Category
 */
class CategoryLang extends PrestashopModel
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
    protected $table = 'category_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_category', 'id_shop', 'id_lang'];
}
