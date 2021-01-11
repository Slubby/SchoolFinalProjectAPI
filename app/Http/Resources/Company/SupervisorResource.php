<?php

namespace App\Http\Resources\Company;

use App\Http\Resources\Profile\CompanyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupervisorResource extends JsonResource
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
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'full_name' => $this->fullName(),
            'company' => $this->whenLoaded('company', function () {
                return new CompanyResource($this->company);
            })
        ];
    }
}
