<?php

namespace App\Http\Resources;

use App\Http\Resources\Profile\CompanyResource;
use App\Http\Resources\Profile\StudentResource;
use App\Http\Resources\Profile\TeacherResource;
use App\Models\Company;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'mobile' => $this->mobile,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'profile' => $this->whenLoaded('profile', function () {
                if ($this->profile instanceof Student) {
                    return new StudentResource($this->profile);
                }

                if ($this->profile instanceof Teacher) {
                    return new TeacherResource($this->profile);
                }

                if ($this->profile instanceof Company) {
                    return new CompanyResource($this->profile);
                }
            })
        ];
    }
}
