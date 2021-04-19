<?php

namespace App\Http\Resources\BudgedPerformance;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

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
        $realization = DB::table('vw_budged_performance_realization')->select('realization_participant1', 'realization_participant2', 'realization_companion')->where('id', $this->id)->first();
        return [
            'id' => $this->id,
            'user' => $this->user,
            'budged' => $this->budged,
            'budged_realization1' => $this->budged_realization1,
            'document_budged_realization1' => $this->document_budged_realization1,
            'budged_realization2' => $this->budged_realization2,
            'document_budged_realization2' => $this->document_budged_realization2,
            'target_participant' => $this->target_participant,
            'realization_participant1' => $realization->realization_participant1,
            'realization_participant2' => $realization->realization_participant2,
            'target_companion' => $this->target_companion,
            'realization_companion' => $realization->realization_companion,
        ];
    }
}
