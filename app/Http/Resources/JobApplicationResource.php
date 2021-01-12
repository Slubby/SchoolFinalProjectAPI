<?php

namespace App\Http\Resources;

use App\Http\Resources\Profile\CompanyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'about_us' => $this->when(!is_null($this->about_us), $this->about_us),
            'requirements' => $this->when(!is_null($this->requirements), $this->requirements),
            'total' => $this->when(!is_null($this->total), $this->total),
            'type' => new EducationResource($this->type),
            'company' => new CompanyResource($this->company),
            'job_application' => $this->whenLoaded('applied', function () {
                return [
                    'id' => $this->applied->pivot->id,
                    'applied' => true,
                    'status' => $this->applied->pivot->status,
                ];
            }, function () {
                return $this->when(isset($this->pivot), function () {
                    return [
                        'id' => $this->pivot->id,
                        'applied' => true,
                        'status' => $this->pivot->status,
                    ];
                }, function () {
                    return [
                        'applied' => false,
                    ];
                });
            }),
        ];
    }
}

