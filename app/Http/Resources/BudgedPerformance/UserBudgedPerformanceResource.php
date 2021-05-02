<?php

namespace App\Http\Resources\BudgedPerformance;

use App\Http\Resources\DistrictsCity\DistrictsCityResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserBudgedPerformanceResource extends JsonResource
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
            'name' => $this->name,
            'username' => $this->username,
            'province' => $this->province,
            'order_province' => $this->order_province,
            'districts_city' => new DistrictsCityResource($this->districts_city),
            'role_id' => $this->role_id,
            'profile_photo_url' => $this->profile_photo_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'budged_performance' => new BudgedPerformanceResource($this->budged_performance)
        ];
    }
}
