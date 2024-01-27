<?php

namespace App\Http\Resources;

use App\Http\Resources\TeamMemberResource;
use App\Http\Resources\ServiceCategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
                'name'                  => $this->name,
                'slug'                  => $this->slug,
                'details'               => $this->details,
                'short_description'     => $this->short_description,
                'image'                 => $this->image,
                'is_active'             => $this->is_active,
                'is_featured'           => $this->is_featured,
                'is_available'          => $this->is_available,
                'is_popular'            => $this->is_popular,
                'is_new'                => $this->is_new,
                'discount_percentage'   => $this->discount_percentage,
                'category'              => ServiceCategoryResource::collection($this->whenLoaded('category')),
                'duration'              => $this->duration,
                'price'                 => $this->price,
                'teamMembers'           => TeamMemberResource::collection($this->whenLoaded('teamMembers')),

        ];
    }
}
