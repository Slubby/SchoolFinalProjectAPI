<?php


namespace App\Traits;


use App\Http\Controllers\Profile\AdminController;
use App\Http\Controllers\Profile\CompanyController;
use App\Http\Controllers\Profile\StudentController;
use App\Http\Controllers\Profile\TeacherController;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Student;
use App\Models\Teacher;
use stdClass;

trait Profile
{
    /**
     * @param object|string $type
     * @param string $function
     * @param mixed ...$data
     * @return mixed|false
     */
    private static function profile($type, string $function, ...$data)
    {
        if (!is_object($type)) {
            $type = self::getType($type);
        }

        if ($type instanceof Company) {
            $profile = CompanyController::$function(...$data);
        } elseif ($type instanceof Teacher) {
            $profile = TeacherController::$function(...$data);
        } elseif ($type instanceof Student) {
            $profile = StudentController::$function(...$data);
        } elseif ($type instanceof Admin) {
            $profile = AdminController::$function(...$data);
        } else {
            $profile = false;
        }

        return $profile;
    }

    /**
     * @param string $type
     * @return Admin|Company|Student|Teacher|false
     */
    private static function getType(string $type) {
        switch (strtolower($type)) {
            case 'company':
                return new Company();
            case 'teacher':
                return new Teacher();
            case 'student':
                return new Student();
            case 'admin':
                return new Admin();
        }

        return false;
    }
}
