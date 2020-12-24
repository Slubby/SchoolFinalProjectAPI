<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\School
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teacher[] $teachers
 * @property-read int|null $teachers_count
 * @method static \Illuminate\Database\Eloquent\Builder|School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School query()
 * @method static \Illuminate\Database\Eloquent\Builder|School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class School extends Model
{
    use HasFactory;

    protected $table = 'schools';

    protected $fillable = [
        'name'
    ];

    /**
     * @return HasMany
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}
