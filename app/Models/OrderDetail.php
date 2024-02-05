<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Order Detail
 *
 * @property string $id
 * @property string $oder_id
 * @property string $product_id
 * @property string $product_combination_id
 * @property string $sku
 * @property string $product_name
 * @property int $quantiy
 * @property double $price
 * @property int $discount_percent
 * @property double $discount
 * @property int $weight
 * @property double $subtotal
 * @property string $order_id
 * @property int $quantity
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereProductCombinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereWeight($value)
 * @mixin \Eloquent
 */
class OrderDetail extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_details';

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
        'order_id',
        'product_id',
        'product_combination_id',
        'sku',
        'product_name',
        'quantiy',
        'price',
        'discount_percent',
        'discount',
        'weight',
        'subtotal',
    ];
}
