<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\VariationOption
 *
 * @property int $id
 * @property int $variation_id
 * @property string $name
 * @property int $flag
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationOption whereVariationId($value)
 * @property-read \App\Models\Variation $variation
 * @mixin \Eloquent
 */
class VariationOption extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'variation_options';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'variation_id',
        'name',
        'flag'
    ];

    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }
}
