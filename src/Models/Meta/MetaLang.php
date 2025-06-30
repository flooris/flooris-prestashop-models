<?php

namespace Flooris\Prestashop\Models\Meta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MetaLang
 *
 * @property int     $id_meta
 * @property int     $id_shop
 * @property int     $id_lang
 * @property ?string $title
 * @property ?string $description
 * @property ?string $keywords
 * @property string  $url_rewrite
 *
 * @package Flooris\Prestashop\Models\Meta\MetaLang
 */
class MetaLang extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ps_meta_lang';
}
