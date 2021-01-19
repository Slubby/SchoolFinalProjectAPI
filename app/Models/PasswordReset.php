<?php

namespace  App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\PasswordReset
 *
 * @property int $id
 * @property int $user_id
 * @property string $verification_code
 * @property int $used
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static Builder|PasswordReset newModelQuery()
 * @method static Builder|PasswordReset newQuery()
 * @method static Builder|PasswordReset query()
 * @method static Builder|PasswordReset whereCreatedAt($value)
 * @method static Builder|PasswordReset whereId($value)
 * @method static Builder|PasswordReset whereUpdatedAt($value)
 * @method static Builder|PasswordReset whereUsed($value)
 * @method static Builder|PasswordReset whereUserId($value)
 * @method static Builder|PasswordReset whereVerificationCode($value)
 * @mixin Eloquent
 */
class PasswordReset extends Model
{
    protected $table = 'users_password_reset';

    protected $fillable = [
        'user_id',
        'verification_code',
        'used'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
