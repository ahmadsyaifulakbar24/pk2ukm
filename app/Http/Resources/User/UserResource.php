<?php

namespace App\Http\Resources\User;

use App\Http\Resources\DistrictsCity\DistrictsCityResource;
use App\Models\Training;
use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Builder\Trait_;

class UserResource extends JsonResource
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
            'districts_city' => new DistrictsCityResource($this->districts_city),
            'role_id' => $this->role_id,
            'profile_photo_url' => $this->profile_photo_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'total_training' => $this->training()->count(),
            'total_companion' => $this->companion_parent()->count(),
        ];
    }
}
