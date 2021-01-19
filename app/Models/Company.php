<?php

namespace App\Models;

use Database\Factories\CompanyUserFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static Builder|Company newModelQuery()
 * @method static Builder|Company newQuery()
 * @method static Builder|Company query()
 * @method static Builder|Company whereCity($value)
 * @method static Builder|Company whereCountry($value)
 * @method static Builder|Company whereCreatedAt($value)
 * @method static Builder|Company whereHouseNumber($value)
 * @method static Builder|Company whereId($value)
 * @method static Builder|Company whereName($value)
 * @method static Builder|Company whereNumber($value)
 * @method static Builder|Company wherePostalCode($value)
 * @method static Builder|Company whereRegion($value)
 * @method static Builder|Company whereStreet($value)
 * @method static Builder|Company whereUpdatedAt($value)
 * @method static Builder|Company whereVerified($value)
 * @mixin Eloquent
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

    /**
     * @return CompanyUserFactory
     */
    protected static function newFactory(): CompanyUserFactory
    {
        return CompanyUserFactory::new();
    }
}
