<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClotheResource extends JsonResource
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
            'clothe_model_id' => $this->clothe_model_id,
            'color_id' => new ColorResource($this->color),
            'size_id' => new SizeResource($this->size),
            'clothe_pictures' => ClothePictureResource::collection($this->clothe_picture),


        ];
    }
}
