<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->CustID,
            'name' => $this->Name,
            'address' => $this->Address,
            'phoneno' => $this->PhoneNo,
            'hadiah' => $this->hadiah,
            'received' => $this->received
        ];
    }
}
