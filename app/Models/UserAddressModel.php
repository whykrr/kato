<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * User Address
 * 
 * @property integer $id
 * @property int $user_id
 * @property string $name
 * @property string $country_code
 * @property string $detail_address
 * @property string $state
 * @property string $city
 * @property string $district
 * @property string $subdistrict
 * @property string $postal_code
 * @property string $latitude
 * @property string $longitude
 */
class UserAddressModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_addresses';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'country_code',
        'detail_address',
        'state',
        'city',
        'district',
        'subdistrict',
        'postal_code',
        'latitude',
        'longitude',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
