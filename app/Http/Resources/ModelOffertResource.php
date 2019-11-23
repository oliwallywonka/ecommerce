<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModelOffertResource extends JsonResource
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
            'offert_porcent' => $this->offert_porcent,
            'offert_days'=> $this->offert_days,
            'status' => $this->status
        ];
    }
}
