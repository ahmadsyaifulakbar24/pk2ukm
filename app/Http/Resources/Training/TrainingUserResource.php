<?php

namespace App\Http\Resources\Training;

use App\Http\Resources\Monitoring\MonitoringResource;
use App\Http\Resources\Participant\ParticipantResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TrainingUserResource extends JsonResource
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
            'user' => $this->user,
            'training_type' => $this->training_type,
            'training_title' => $this->training_title,
            'start_date' => $this->start_date,
            'finish_date' => $this->finish_date,
            'place' => $this->place,
            'province' => $this->province,
            'districts_city' => $this->districts_city,
            'status' => $this->status,
            'participant' => ParticipantResource::collection($this->participant),
            'crated_at' => $this->created_at,
            'update_at' => $this->updated_at,
            'total_participant' => $this->participant()->count(),
        ];
    }
}
