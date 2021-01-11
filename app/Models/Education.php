<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Education
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'name'
    ];
}
