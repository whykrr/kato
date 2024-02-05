<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Product Variation Option
 *
 * @property string $id
 * @property string $product_variation_id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariationOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariationOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariationOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariationOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariationOption whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVariationOption whereProductVariationId($value)
 * @mixin \Eloquent
 */
class ProductVariationOption extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_variation_options';

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
        'product_variation_id',
        'name',
    ];
}
