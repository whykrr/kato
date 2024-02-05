<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Product Images
 *
 * @property string $id
 * @property string $product_id
 * @property string $product_variation_option_id
 * @property string $image
 * @property bool $is_featured
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereProductVariationOptionId($value)
 * @mixin \Eloquent
 */
class ProductImages extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_images';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'product_variation_option_id',
        'image',
        'is_featured',
    ];
}
