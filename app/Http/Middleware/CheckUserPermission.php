<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Company;
use App\Models\Student;
use App\Models\Teacher;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserPermission
{
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
        $instance = self::types($type);

        if ($instance) {
            if (Auth::user()->profile instanceof $instance) {
                return $next($request);
            }
        }

        return response()->json(['message' => 'You have no permissions for this action'], Response::HTTP_FORBIDDEN);
    }

    /**
     * @param string $type
     * @return false|string
     */
    private static function types(string $type)
    {
        switch ($type) {
            case 'company':
                return Company::class;
            case 'teacher':
                return Teacher::class;
            case 'student':
                return Student::class;
            case 'admin':
                return Admin::class;
        }

        return false;
    }
}
