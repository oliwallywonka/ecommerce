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
            'materials_id' => $this->materials_id,
            'clothe_models_id' => $this->clothe_models_id,
            'materials' => new ClotheMaterialResource($this->materials),
            'porcente' => $this->porcent,
            'status' => $this->status
        ];
    }
}
