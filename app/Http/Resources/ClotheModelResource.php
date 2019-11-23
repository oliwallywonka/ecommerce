<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClotheModelResource extends JsonResource
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
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'type_clothe_id' => $this->type_clothe_id,

            'category' => new CategoryResource($this->category),
            'brand' => new BrandResource($this->brand),
            'type_clothe' => new TypeClotheResource($this->type_clothe),

            'model_offerts' => ModelOffertResource::collection($this->model_offert),
            'clothe_materials'=> ClotheMaterialResource::collection($this->clothe_material),
            'model_pictures' =>  ModelPictureResource::collection($this->model_picture),

            'ref_price' => $this->ref_price,
            'description' => $this->description,
            'weight' => $this->weight,
            'gender' => $this->gender,
            'care_instructions' => $this->care_instructions,
            'status' => $this->status
        ];
    }
}
