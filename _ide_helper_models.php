<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house_number
 * @property string $postal_code
 * @property bool $verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereVerified($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
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
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
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
 */
	class School extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $id
 * @property int $number
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string $gender
 * @property string $birthday
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house_number
 * @property string $postal_code
 * @property string $education
 * @property int $mentor_id
 * @property string $started_at
 * @property int $grade
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $mentor
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereMentorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property int $school_id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string $short_name
 * @property bool $active
 * @property bool $verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\School $school
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereVerified($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $mobile
 * @property string $email
 * @property string|null $email_verified_at
 * @property string|null $profile_type
 * @property int|null $profile_id
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\PasswordReset|null $passwordReset
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $profile
 * @property-read \App\Models\Verification|null $verification
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Verification extends \Eloquent {}
}

