<?php

namespace App\Http\Resources\Company;

use App\Http\Resources\EducationResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VacancyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
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
            'applied_students' => $this->whenLoaded('applied', function () {
                return UserResource::collection($this->applied);
            })
        ];
    }
}
