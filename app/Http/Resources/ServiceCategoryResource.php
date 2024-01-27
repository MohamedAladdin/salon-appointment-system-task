<?php

namespace App\Http\Resources;

use App\Http\Resources\BranchResource;
use App\Http\Resources\ServiceResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [ 
            'name'      => $this->name,
            'branch'    => BranchResource::collection($this->whenLoaded('branch')),
            'services'  => ServiceResource::collection($this->whenLoaded('services')),
        ];
    }
}
