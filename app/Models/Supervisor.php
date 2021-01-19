<?php

namespace App\Models;

use App\Traits\FullName;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Supervisor
 *
 * @property int $id
 * @property int $company_id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @method static Builder|Supervisor newModelQuery()
 * @method static Builder|Supervisor newQuery()
 * @method static Builder|Supervisor query()
 * @method static Builder|Supervisor whereCompanyId($value)
 * @method static Builder|Supervisor whereCreatedAt($value)
 * @method static Builder|Supervisor whereFirstName($value)
 * @method static Builder|Supervisor whereId($value)
 * @method static Builder|Supervisor whereLastName($value)
 * @method static Builder|Supervisor whereMiddleName($value)
 * @method static Builder|Supervisor whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Supervisor extends Model
{
    use HasFactory, FullName;

    protected $table = 'supervisors';

    protected $fillable = [
        'company_id',
        'first_name',
        'middle_name',
        'last_name',
    ];

    /**
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
