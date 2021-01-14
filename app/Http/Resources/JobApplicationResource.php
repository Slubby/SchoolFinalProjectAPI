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
            'about_us' => $this->when(isset($this->about_us), $this->about_us),
            'requirements' => $this->when(isset($this->requirements), $this->requirements),
            'total' => $this->when(isset($this->total), $this->total),
            $this->merge($this->whenLoaded('applied',
                function () {
                    return new AppliedStatusResource($this->applied->pivot);
                }, function () { return $this->when(isset($this->pivot),
                    function () {
                        return new AppliedStatusResource($this->pivot);
                    }, function () {
                        return [
                            'applied' => false,
                        ];
                    });
                }),
            ),
            'type' => new EducationResource($this->type),
            'company' => new CompanyResource($this->company),
        ];
    }
}

