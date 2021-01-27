<?php


namespace App\Traits;


trait ProfileValidation
{
    /**
     * @param bool $create
     * @param bool $import
     * @return array
     */
    public static function validations(bool $create = false): array
    {
        $additional = $create ? (self::$create ?? []) : (self::$update ?? []);

        return array_merge(self::$default, $additional);
    }
}
