<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseDetailResource extends JsonResource
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
            'purchase_id' => $this->purchas_id,

            'quantity' => $this->quantity,
            'purchase_price' => $this->purchase_price,
            'status' => $this->status,

            'clothe' => new ClotheResource($this->clothe),
        ];
    }
}
