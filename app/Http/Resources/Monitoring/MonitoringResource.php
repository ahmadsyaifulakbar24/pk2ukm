<?php

namespace App\Http\Resources\Monitoring;

use App\Http\Resources\Param\ParamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MonitoringResource extends JsonResource
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
            'm1' => $this->m1,
            'm2' => new ParamResource($this->m2),
            'm3' => $this->m3,
        ];
    }
}
