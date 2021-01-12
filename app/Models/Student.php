<?php

namespace App\Models;

use App\Traits\FullName;
use App\Traits\UseFile;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
 * @property int|null $school_id
 * @property int|null $education_id
 * @property int|null $mentor_id
 * @property string $started_at
 * @property int $grade
 * @property int|null $curriculum_vitae_id
 * @property int|null $motivation_letter_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Education|null $education
 * @property-read Teacher|null $mentor
 * @property-read School|null $school
 * @property-read User|null $user
 * @method static Builder|Student newModelQuery()
 * @method static Builder|Student newQuery()
 * @method static Builder|Student query()
 * @method static Builder|Student whereBirthday($value)
 * @method static Builder|Student whereCity($value)
 * @method static Builder|Student whereCountry($value)
 * @method static Builder|Student whereCreatedAt($value)
 * @method static Builder|Student whereCurriculumVitaeId($value)
 * @method static Builder|Student whereEducationId($value)
 * @method static Builder|Student whereFirstName($value)
 * @method static Builder|Student whereGender($value)
 * @method static Builder|Student whereGrade($value)
 * @method static Builder|Student whereHouseNumber($value)
 * @method static Builder|Student whereId($value)
 * @method static Builder|Student whereLastName($value)
 * @method static Builder|Student whereMentorId($value)
 * @method static Builder|Student whereMiddleName($value)
 * @method static Builder|Student whereMotivationLetterId($value)
 * @method static Builder|Student whereNumber($value)
 * @method static Builder|Student wherePostalCode($value)
 * @method static Builder|Student whereRegion($value)
 * @method static Builder|Student whereSchoolId($value)
 * @method static Builder|Student whereStartedAt($value)
 * @method static Builder|Student whereStreet($value)
 * @method static Builder|Student whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobApplication[] $jobApplications
 * @property-read int|null $job_applications_count
 */
class Student extends Model
{
    use HasFactory, UseFile, FullName;

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
        'school_id',
        'education_id',
        'mentor_id',
        'started_at',
        'grade',
    ];

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
    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class);
    }

    /**
     * @return BelongsTo
     */
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * @return BelongsTo
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    /**
     * @return BelongsToMany
     */
    public function jobApplications(): BelongsToMany
    {
        return $this->belongsToMany(Vacancy::class, 'job_applications')->withTimestamps()->withPivot(['status']);
    }
}
