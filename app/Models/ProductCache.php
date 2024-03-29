<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Product Cache
 *
 * @property string $id
 * @property string $product_id
 * @property string $slug
 * @property string $data
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCache whereSlug($value)
 * @mixin \Eloquent
 */
class ProductCache extends Model
{
    use HasFactory, HasUlids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_cache';

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
        'slug',
        'data',
    ];
}
