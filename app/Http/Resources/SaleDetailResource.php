<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleDetailResource extends JsonResource
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
            'clothe_id' => $this->clothe_id,
            'sale_id' => $this->sale_id,
            'sale_price' => $this->sale_price,
            'status' => $this->status,
            'clothe' => new ClotheResource($this->clothe)

        ];
    }
}
