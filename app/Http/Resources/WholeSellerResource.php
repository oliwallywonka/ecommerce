<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WholeSellerResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,


            'location' => $this->location,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'status' => $this->status,

            'contact' => ContactResource::collection($this->contact),
        ];
    }
}
