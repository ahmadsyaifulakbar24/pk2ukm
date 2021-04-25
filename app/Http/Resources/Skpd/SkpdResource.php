<?php

namespace App\Http\Resources\Skpd;

use Illuminate\Http\Resources\Json\JsonResource;

class SkpdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'user' => $this->user,
            'name_dinas' => $this->name_dinas,
            'nip_dinas' => $this->nip_dinas,
            'phone_number_dinas' => $this->phone_number_dinas,
            'name_responsible_person' => $this->name_responsible_person,
            'phone_number_responsible_person' => $this->phone_number_responsible_person,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
