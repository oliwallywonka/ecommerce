<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClotheMaterialResource extends JsonResource
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
            'material_id' => $this->material_id,
            'clothe_model_id' => $this->clothe_model_id,
            'material' => new MaterialResource($this->material),
            'porcent' => $this->porcent,
            'status' => $this->status
        ];
    }
}
