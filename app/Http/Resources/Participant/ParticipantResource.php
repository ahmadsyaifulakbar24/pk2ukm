<?php

namespace App\Http\Resources\Participant;

use App\Http\Resources\Monitoring\MonitoringResource;
use App\Http\Resources\Param\ParamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantResource extends JsonResource
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
            'training_id' => $this->training_id,
            'name' => $this->name,
            'gender' => $this->gender,
            'religion_id' => new ParamResource($this->religion),
            'id_number' => $this->id_number,
            'place_birth' => $this->place_birth,
            'date_birth' => $this->date_birth,
            'education' => new ParamResource($this->education),
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'province' => $this->province,
            'districts_city' => $this->districts_city,
            'profile_photo' => $this->profile_photo_url,

            // Business Status
            'business_status' => new ParamResource($this->business_status),

            // Koperasi
            'name_koperasi' => $this->name_koperasi,
            'address_koperasi' => $this->address_koperasi,
            'type_koperasi' =>  new ParamResource($this->type_koperasi),
            'date_establishment_koperasi' => $this->date_establishment_koperasi,
            'registrasion_number_koperasi' => $this->registrasion_number_koperasi,
            'position_koperasi' => new ParamResource($this->position_koperasi),

            // UMKM
            'name_umkm' => $this->name_umkm,
            'address_umkm' => $this->address_umkm,
            'business_sector' => new ParamResource($this->business_sector),
            'date_establishment_umkm' => $this->date_establishment_umkm,
            'no_iumk' => $this->no_iumk,
            'position_umkm' => new ParamResource($this->position_umkm),
            'business_turnover' => $this->business_turnover,
            'number_employees' => $this->number_employees,

            // Monitoring
            'monitoring' => new MonitoringResource($this->monitoring),
            
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
