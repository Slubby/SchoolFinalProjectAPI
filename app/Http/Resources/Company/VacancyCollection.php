<?php

namespace App\Http\Resources\Company;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VacancyCollection extends ResourceCollection
{
    public $collects = VacancyResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }
}
