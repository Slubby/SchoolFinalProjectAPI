<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PasswordReset
 *
 * @property int $id
 * @property int $user_id
 * @property string $verification_code
 * @property int $used
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereVerificationCode($value)
 * @mixin \Eloquent
 */
class PasswordReset extends Model
{
    protected $table = 'users_password_reset';

    protected $fillable = [
        'user_id',
        'verification_code',
        'used'
    ];
}
