<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




/**
 * App\Models\Variation
 *
 * @property int $id
 * @property string $name
 * @property int $is_multiple
 * @property int $is_deletable
 * @property int $flag
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VariationOption> $options
 * @property-read int|null $options_count
 * @method static \Illuminate\Database\Eloquent\Builder|Variation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereIsDeletable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereIsMultiple($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereName($value)
 * @mixin \Eloquent
 */
class Variation extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'variations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'is_multiple',
        'is_deletable',
        'flag',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function options()
    {
        return $this->hasMany(VariationOption::class, 'variation_id', 'id');
    }
}
