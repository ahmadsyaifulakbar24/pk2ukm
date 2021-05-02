<?php

namespace App\Http\Resources\Companion;

use App\Http\Resources\Param\ParamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanionResource extends JsonResource
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
            'parent_user' => [
                'name' => $this->parent_user->name,
                'province' => $this->parent_user->province->province
            ],
            'user_id' => $this->user_id,
            'name' => $this->user->name,
            'username' => $this->user->username,
            'profile_photo_url' => $this->user->profile_photo_url,
            'no_ktp' => $this->no_ktp,
            'status' => $this->status,
            'gender' => $this->gender,
            'place_birth' => $this->place_birth,
            'date_birth' => $this->date_birth,
            'religion' => new ParamResource($this->religion),
            'education' => new ParamResource($this->education),
            'home_address' => $this->home_address,
            'districts_city' => $this->districts_city,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
