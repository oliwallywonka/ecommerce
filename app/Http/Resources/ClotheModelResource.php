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
            'categories_id' => $this->categories_id,
            'brands_id' => $this->brands_id,
            'type_clothes_id' => $this->type_clothes_id,
            'categories' => new CategoryResource($this->categories),
            'brands' => new BrandResource($this->brands),
            'typeClothes' => new TypeClotheResource($this->typeClothes),

            'modelOfferts' => ModelOffertResource::collection($this->modelOfferts),
            'clotheMaterials'=> ClotheMaterialResource::collection($this->clotheMaterials),
            'modelPictures' => ModelPictureResource::colletion($this->modelPictures),
            
            'ref_price' => $this->ref_price,
            'description' => $this->description,
            'weight' => $this->weight,
            'gender' => $this->gender,
            'care_instructions' => $this->care_instructions,
            'status' => $this->status
        ];
    }
}
