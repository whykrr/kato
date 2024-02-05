<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Order
 *
 * @property string $id
 * @property string $order_no
 * @property string $date
 * @property integer $user_id
 * @property string $currency
 * @property double $order_total
 * @property integer $discount_percent
 * @property double $discount
 * @property double $discount_point
 * @property int $total_weight
 * @property double $shipping_fee
 * @property double $shipping_discount
 * @property string $shipping_country
 * @property string $shipping_details
 * @property double $order_grand_total
 * @property integer $payment_method_id
 * @property string $payment_type
 * @property string $payment_bank_code
 * @property string $payment_evidence
 * @property int $payment_verified_by
 * @property string $payment_verified_at
 * @property string $payment_details
 * @property int $status
 * @property string $canceled_reason
 * @property OrderDetail[] $details
 * @property string|null $user_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCanceledReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscountPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentEvidence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentVerifiedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserName($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
        'order_no',
        'date',
        'user_id',
        'currency',
        'order_total',
        'discount_percent',
        'discount',
        'discount_point',
        'total_weight',
        'shipping_fee',
        'shipping_discount',
        'shipping_country',
        'shipping_details',
        'order_grand_total',
        'payment_method_id',
        'payment_type',
        'payment_bank_code',
        'payment_evidence',
        'payment_verified_by',
        'payment_verified_at',
        'payment_details',
        'status',
        'canceled_reason',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
        'payment_verified_at' => 'datetime',
        'created_at' => 'datetime',
    ];
}
