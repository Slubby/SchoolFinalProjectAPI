<?php


	namespace App\Traits;


	use App\Models\User;
    use Illuminate\Support\Facades\Auth;

    trait JWTLogin
	{
        /**
         * @param User $user
         * @return $this
         */
        public function authorizationUser(User $user)
        {
            $token = Auth::login($user);
            $this->withHeader('Authorization', "Bearer {$token}");

            return $this;
        }
	}
