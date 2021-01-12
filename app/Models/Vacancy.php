<?php

namespace App\Models;

use App\Casts\Json;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Vacancy
 *
 * @property int $id
 * @property int $company_id
 * @property int|null $type_id
 * @property string $title
 * @property string $description
 * @property string|null $about_us
 * @property array|null $requirements
 * @property int $total
 * @property bool $is_closed
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read Company $company
 * @property-read Education|null $type
 * @method static Builder|Vacancy newModelQuery()
 * @method static Builder|Vacancy newQuery()
 * @method static Builder|Vacancy query()
 * @method static Builder|Vacancy whereAboutUs($value)
 * @method static Builder|Vacancy whereCompanyId($value)
 * @method static Builder|Vacancy whereCreatedAt($value)
 * @method static Builder|Vacancy whereDeletedAt($value)
 * @method static Builder|Vacancy whereDescription($value)
 * @method static Builder|Vacancy whereId($value)
 * @method static Builder|Vacancy whereIsClosed($value)
 * @method static Builder|Vacancy whereRequirements($value)
 * @method static Builder|Vacancy whereTitle($value)
 * @method static Builder|Vacancy whereTotal($value)
 * @method static Builder|Vacancy whereTypeId($value)
 * @method static Builder|Vacancy whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobApplication[] $applied
 * @property-read int|null $applied_count
 * @method static \Illuminate\Database\Query\Builder|Vacancy onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|Vacancy withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Vacancy withoutTrashed()
 */
class Vacancy extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'vacancies';

    protected $fillable = [
        'company_id',
        'type_id',
        'title',
        'description',
        'about_us',
        'requirements',
        'total',
        'is_closed'
    ];

    protected $casts = [
        'requirements' => Json::class,
        'is_closed' => 'boolean'
    ];

    /**
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Education::class);
    }

    /**
     * @return BelongsToMany
     */
    public function applied(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'job_applications')->withTimestamps()->withPivot(['status']);
    }

    /**
     * @param Student $student
     * @return mixed|null
     */
    public function studentApplied(Student $student)
    {
        return $this->applied()
            ->where('student_id', $student->id)
            ->where('job_applications.created_at', '>=', Carbon::now()->subMonths(6))
            ->whereNotIn('status', ['done'])
            ->latest()->first();
    }
}
