<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
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
            'type' => new EducationResource($this->type),
            'progress' => $this->whenLoaded('applied', function () {
                return [
                    'applied' => true,
                    'status' => $this->applied->pivot->status,
                ];
            }, function () {
                return [
                    'applied' => false,
                ];
            })
        ];
    }
}

