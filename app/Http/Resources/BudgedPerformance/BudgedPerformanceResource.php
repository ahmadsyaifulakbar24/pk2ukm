<?php

namespace App\Http\Resources\BudgedPerformance;

use Illuminate\Http\Resources\Json\JsonResource;

class BudgedPerformanceResource extends JsonResource
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
            'budged' => $this->budged,
            'budged_realization1' => $this->budged_realization1,
            'document_budged_realization1' => $this->document_budged_realization1,
            'budged_realization2' => $this->budged_realization2,
            'document_budged_realization2' => $this->document_budged_realization2,
            'target_participant' => $this->target_participant,
            'target_companion' => $this->target_companion,
        ];
    }
}
