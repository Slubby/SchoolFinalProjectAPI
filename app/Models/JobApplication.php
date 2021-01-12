<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\JobApplication
 *
 * @property int $id
 * @property int $student_id
 * @property int $vacancy_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereVacancyId($value)
 * @mixin \Eloquent
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
}
