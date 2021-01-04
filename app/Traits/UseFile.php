<?php


namespace App\Traits;


use App\Models\File;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait UseFile
{
    /**
     * @param string $column
     * @return HasOne
     */
    public function getFile(string $column): HasOne
    {
        return $this->hasOne(File::class, $column);
    }
}
