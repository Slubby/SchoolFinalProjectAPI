<?php

namespace App\Http\Resources\Profile;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'number' => $this->number,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'country' => $this->country,
            'region' => $this->region,
            'city' => $this->city,
            'street' => $this->street,
            'house_number' => $this->house_number,
            'postal_code' => $this->postal_code,
            'education' => $this->education,
            'started_at' => $this->started_at,
            'grade' => $this->grade,
            'mentor' => $this->whenLoaded('mentor', function () {
                return new UserResource($this->mentor);
            }),
        ];
    }
}
