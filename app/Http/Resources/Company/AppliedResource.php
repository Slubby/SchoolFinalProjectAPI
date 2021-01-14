<?php

namespace App\Http\Resources\Company;

use App\Http\Resources\Profile\StudentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AppliedResource extends JsonResource
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
            'email' => $this->user->email,
            'mobile' => $this->user->mobile,
            $this->merge(new StudentResource($this)),
        ];
    }
}
