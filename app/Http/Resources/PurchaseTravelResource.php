<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseTravelResource extends JsonResource
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
            'wholeseller_id' => $this->wholeseller_id,
            'travel_id' => $this->travel_is,
            'employee_id' => $this->employee_id,
            'wholeseller' => new WholeSellerResource($this->wholeseller),
            'employee' => new EmployeeResource($this->employee),
            'total_cost'=> $this->total_cost,
            'status' => $this->status
        ];
    }
}
