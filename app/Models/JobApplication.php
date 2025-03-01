<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\JobApplication
 *
 * @property int $id
 * @property int $student_id
 * @property int $vacancy_id
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\User|null $student
 * @property-read \App\Models\Vacancy|null $vacancy
 * @method static Builder|JobApplication newModelQuery()
 * @method static Builder|JobApplication newQuery()
 * @method static Builder|JobApplication query()
 * @method static Builder|JobApplication whereCreatedAt($value)
 * @method static Builder|JobApplication whereId($value)
 * @method static Builder|JobApplication whereStatus($value)
 * @method static Builder|JobApplication whereStudentId($value)
 * @method static Builder|JobApplication whereUpdatedAt($value)
 * @method static Builder|JobApplication whereVacancyId($value)
 * @mixin Eloquent
 */
class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'job_applications';

    protected $fillable = [
        'student_id',
        'vacancy_id',
        'status',
    ];

    /**
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function vacancy(): BelongsTo
    {
        return $this->belongsTo(Vacancy::class);
    }
}
