<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TravelPurchaseResource extends JsonResource
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
            'destiny' => $this->destiny,
            'food_cost' => $this->food_cost,
            'ticket_cost' => $this->ticket_cost,
            'others' => $this->others,
            'description' => $this->description,
            'status' => $this->status,
            'purchase' => PurchaseTravelResource::collection($this->purchase)
        ];
    }
}
