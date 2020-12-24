<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\JsonResponse;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards): JsonResponse
    {
        if ($this->authenticate($request, $guards)) {
            return response()->json(['message' => 'Unauthorized', 'action' => 'logout'], 401);
        }

        return $next($request);
    }

    protected function authenticate($request, array $guards): bool
    {
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                $this->auth->shouldUse($guard);

                return false;
            }
        }

        return true;
    }
}
