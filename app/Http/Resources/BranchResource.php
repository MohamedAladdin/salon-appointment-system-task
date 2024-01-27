<?php

namespace App\Http\Resources;

use App\Http\Resources\SalonResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\TeamMemberResource;
use App\Http\Resources\ServiceCategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
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
                
                'name'              => $this->name,
                'salon'             => SalonResource::collection($this->whenLoaded('salon')),
                'address'           => $this->address,
                'phone_number'      => $this->phone_number,
                'email'             => $this->email,
                'latitude'          => $this->latitude,
                'longitude'         => $this->longitude,
                'services'          => ServiceResource::collection($this->whenLoaded('services')),
                'service_categories' => ServiceCategoryResource::collection($this->whenLoaded('serviceCategories')),
                'team_members'      => TeamMemberResource::collection($this->whenLoaded('teamMembers')),
        ];
    }
}
