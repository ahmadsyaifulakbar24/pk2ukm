<?php

namespace App\Http\Resources\Skpd;

use App\Http\Resources\DistrictsCity\DistrictsCityResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserSkpdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if($this->skpd) {
            $skpd = [
                'id' => $this->skpd->id,
                'name_dinas' => $this->skpd->name_dinas,
                'phone_number_dinas' => $this->skpd->phone_number_dinas,
                'name_responsible_person' => $this->skpd->name_responsible_person,
                'phone_number_responsible_person' => $this->skpd->phone_number_responsible_person,
                'created_at' => $this->skpd->created_at,
                'updated_at' => $this->skpd->updated_at,
            ];
        } else {
            $skpd = null;
        }

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
            'skpd' => $skpd
        ];
    }
}
