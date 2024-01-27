<?php

namespace App\Http\Resources;

use App\Http\Resources\ServiceResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TeamMemberScheduleResource;

class TeamMemberResource extends JsonResource
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
            'name'          => $this->name,
            'email'         => $this->email,
            'phone_number'  => $this->phone_number,
            'schedules'     => TeamMemberScheduleResource::collection($this->schedules),
            'services'      => ServiceResource::collection($this->whenLoaded('services')),
        ];
    }
}
