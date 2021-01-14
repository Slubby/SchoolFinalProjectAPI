<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppliedStatusResource extends JsonResource
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
            'applied' => true,
            'status' => $this->status,
            'applied_at' => $this->created_at->format('Y-m-d'),
            'job_application_id' => $this->id,
        ];
    }
}
