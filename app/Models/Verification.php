<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Verification
 *
 * @property int $id
 * @property int $user_id
 * @property string $verification_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Verification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Verification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Verification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Verification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verification whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verification whereVerificationCode($value)
 * @mixin \Eloquent
 */
class Verification extends Model
{
    protected $table = 'users_verification';

    protected $fillable = [
        'user_id',
        'verification_code',
    ];
}
