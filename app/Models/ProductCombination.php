<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Product Combination
 *
 * @property string $id
 * @property string $product_id
 * @property string $combination_string
 * @property string $sku
 * @property double $price_idr
 * @property double $price_usd
 * @property int $weight
 * @property string $unique_string
 * @property int $available_stock
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereAvailableStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereCombinationString($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination wherePriceIdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination wherePriceUsd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereUniqueString($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCombination whereWeight($value)
 * @mixin \Eloquent
 */
class ProductCombination extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_combinations';

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
        'combination_string',
        'sku',
        'price_idr',
        'price_usd',
        'weight',
        'unique_string',
        'available_stock',
    ];
}
