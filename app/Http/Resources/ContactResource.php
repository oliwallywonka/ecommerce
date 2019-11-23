<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'contact_type_id' => $this->contact_type_id,
            'wholeseller_id' => $this->wholeseller_id,
            'contact_type' => new ContactTypeResource($this->contact_type),
            'status' => $this->status
        ];
    }
}
