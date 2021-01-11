<?php

namespace App\Http\Resources\Profile;

use App\Http\Resources\SchoolResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
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
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'full_name' => $this->fullName(),
            'short_name' => $this->short_name,
            'active' => $this->active,
            'school' => $this->whenLoaded('school', function () {
                return new SchoolResource($this->school);
            }),
        ];
    }
}
