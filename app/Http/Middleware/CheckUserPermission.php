<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Company;
use App\Models\Student;
use App\Models\Teacher;
use App\Traits\Profile;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserPermission
{
    use Profile;

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string $type
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $type)
    {
        $instance = self::getType($type);

        if ($instance) {
            if (Auth::user()->profile instanceof $instance) {
                return $next($request);
            }
        }

        return response()->json(['message' => 'You have no permissions for this action'], Response::HTTP_FORBIDDEN);
    }
}
