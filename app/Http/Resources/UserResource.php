<?php

namespace App\Http\Resources;

use App\Http\Resources\Profile\AdminResource;
use App\Http\Resources\Profile\CompanyResource;
use App\Http\Resources\Profile\StudentResource;
use App\Http\Resources\Profile\TeacherResource;
use App\Models\Admin;
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
                $profile = $this->profile;

                if ($profile instanceof Student) {
                    return new StudentResource($profile);
                } elseif ($profile instanceof Teacher) {
                    return new TeacherResource($profile);
                } elseif ($profile instanceof Company) {
                    return new CompanyResource($profile);
                } elseif ($profile instanceof Admin) {
                    return new AdminResource($profile);
                }

                return null;
            })
        ];
    }
}
