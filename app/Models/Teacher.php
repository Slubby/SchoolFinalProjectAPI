<?php

namespace App\Models;

use App\Traits\FullName;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property int $school_id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string $short_name
 * @property bool $active
 * @property bool $verified
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\School $school
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Student[] $students
 * @property-read int|null $students_count
 * @property-read \App\Models\User|null $user
 * @method static Builder|Teacher newModelQuery()
 * @method static Builder|Teacher newQuery()
 * @method static Builder|Teacher query()
 * @method static Builder|Teacher whereActive($value)
 * @method static Builder|Teacher whereCreatedAt($value)
 * @method static Builder|Teacher whereFirstName($value)
 * @method static Builder|Teacher whereId($value)
 * @method static Builder|Teacher whereLastName($value)
 * @method static Builder|Teacher whereMiddleName($value)
 * @method static Builder|Teacher whereSchoolId($value)
 * @method static Builder|Teacher whereShortName($value)
 * @method static Builder|Teacher whereUpdatedAt($value)
 * @method static Builder|Teacher whereVerified($value)
 * @mixin Eloquent
 */
class Teacher extends Model
{
    use HasFactory, FullName;

    protected $table = 'teacher_profile';

    protected $fillable = [
        'school_id',
        'first_name',
        'middle_name',
        'last_name',
        'short_name',
        'active',
        'verified',
    ];

    protected $casts = [
        'active' => 'boolean',
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
     * @return BelongsTo
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    /**
     * @return HasMany
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
