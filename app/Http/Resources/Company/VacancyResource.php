<?php

namespace App\Http\Resources\Company;

use App\Http\Resources\EducationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class VacancyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'about_us' => $this->about_us,
            'requirements' => $this->requirements,
            'total' => $this->total,
            'closed' => $this->is_closed,
            'type' => new EducationResource($this->type),
        ];
    }
}
