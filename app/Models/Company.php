<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * App\Models\Company
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house_number
 * @property string $postal_code
 * @property bool $verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereVerified($value)
 * @mixin \Eloquent
 */
class Company extends Model
{
    use HasFactory;

    protected $table = 'company_profile';

    protected $fillable = [
        'number',
        'name',
        'country',
        'region',
        'city',
        'street',
        'house_number',
        'postal_code',
        'verified',
    ];

    protected $casts = [
        'verified' => 'boolean',
    ];

    /**
     * @return MorphOne
     */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'profile');
    }
}
