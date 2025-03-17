<?php

namespace Flooris\Prestashop\Models\Image;

use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Traits\CompositeKeyModelTrait;

/**
 * Class ImageLang
 *
 * @property int     $id_image
 * @property int     $id_lang
 * @property ?string $legend
 *
 * @package Flooris\Prestashop\Models\Image
 */
class ImageLang extends PrestashopModel
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
    protected $table = 'image_lang';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['id_image', 'id_lang'];
}
