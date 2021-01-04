<?php

namespace App\Models;

use App\Traits\UseFile;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Student
 *
 * @property int $id
 * @property int $number
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string $gender
 * @property string $birthday
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house_number
 * @property string $postal_code
 * @property string $education
 * @property int $mentor_id
 * @property string $started_at
 * @property int $grade
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\User $mentor
 * @property-read \App\Models\User|null $user
 * @method static Builder|Student newModelQuery()
 * @method static Builder|Student newQuery()
 * @method static Builder|Student query()
 * @method static Builder|Student whereBirthday($value)
 * @method static Builder|Student whereCity($value)
 * @method static Builder|Student whereCountry($value)
 * @method static Builder|Student whereCreatedAt($value)
 * @method static Builder|Student whereEducation($value)
 * @method static Builder|Student whereFirstName($value)
 * @method static Builder|Student whereGender($value)
 * @method static Builder|Student whereGrade($value)
 * @method static Builder|Student whereHouseNumber($value)
 * @method static Builder|Student whereId($value)
 * @method static Builder|Student whereLastName($value)
 * @method static Builder|Student whereMentorId($value)
 * @method static Builder|Student whereMiddleName($value)
 * @method static Builder|Student whereNumber($value)
 * @method static Builder|Student wherePostalCode($value)
 * @method static Builder|Student whereRegion($value)
 * @method static Builder|Student whereStartedAt($value)
 * @method static Builder|Student whereStreet($value)
 * @method static Builder|Student whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Student extends Model
{
    use HasFactory, UseFile;

    protected $table = 'student_profile';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'birthday',
        'country',
        'region',
        'city',
        'street',
        'house_number',
        'postal_code',
        'education',
        'mentor_id',
        'started_at',
        'grade',
    ];

    /**
     * @return string
     */
    public function fullName(): string
    {
        return $this->first_name . ($this->middle_name ? ' ' . $this->middle_name . ' ' : ' ') . $this->last_name;
    }

    /**
     * @return MorphOne
     */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'profile');
    }

    /**
     * @return BelongsTo
     */
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
