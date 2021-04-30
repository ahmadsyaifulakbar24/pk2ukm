<?php

namespace App\Http\Controllers\API\Participant;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Participant\ParticipantResource;
use App\Models\Participant;
use App\Models\Training;
use Illuminate\Http\Request;

class GetParticipantController extends Controller
{
    public function by_training(Request $request, Training $training)
    {
        $this->validate($request, [
            'limit' => ['nullable', 'in:true,false']
        ]);

        if($request->limit == 'false') {
            $participant = $training->participant()->orderBy('id', 'desc')->get();
        } else {
            $limit = $request->input('limit', 15);
            $participant = $training->participant()->orderBy('id', 'desc')->paginate($limit);
        }
        return ParticipantResource::collection($participant);
    }

    public function by_id(Participant $participant)
    {
        return ResponseFormatter::success(
            new ParticipantResource($participant),
            'success get participant data'
        );
    }
}
