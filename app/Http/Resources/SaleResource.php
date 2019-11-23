<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
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
            'customer_id' => $this->customer_id,
            'sale_status_id' => $this->sale_status_id,
            'total_sale' => $this->total_sale,
            'status' => $this->status,
            'sale_status' => new SaleStatusResource($this->sale_status),
            'customer' => new CustomerResource($this->customer),
            'employee' => new EmployeeResource($this->employee),

        ];
    }
}
