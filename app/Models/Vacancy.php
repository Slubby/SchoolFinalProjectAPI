<?php

namespace App\Models;

use App\Casts\Json;
use Eloquent;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
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
 * @property Carbon|null $deleted_at
 * @property-read Collection|\App\Models\User[] $applied
 * @property-read int|null $applied_count
 * @property-read \App\Models\User $company
 * @property-read \App\Models\Education|null $type
 * @method static Builder|Vacancy newModelQuery()
 * @method static Builder|Vacancy newQuery()
 * @method static \Illuminate\Database\Query\Builder|Vacancy onlyTrashed()
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
 * @method static \Illuminate\Database\Query\Builder|Vacancy withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Vacancy withoutTrashed()
 * @mixin Eloquent
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
        return $this->belongsTo(User::class);
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
        return $this->belongsToMany(User::class, 'job_applications', null, 'student_id')->withTimestamps()->withPivot(['id', 'status']);
    }

    /**
     * @param User $user
     * @return mixed|null
     */
    public function studentApplied(User $user)
    {
        return $this->applied()
                    ->wherePivot('student_id', $user->id)
                    ->wherePivotNotIn('status', ['completed'])
                    ->wherePivot('created_at', '>=', Carbon::now()->subMonths(6))
                    ->orderByPivot('created_at', 'desc')
                    ->first();
    }
}
