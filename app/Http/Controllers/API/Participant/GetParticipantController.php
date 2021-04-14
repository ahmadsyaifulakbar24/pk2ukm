<?php

namespace App\Http\Controllers\API\Participant;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Participant\ParticipantResource;
use App\Models\Training;
use Illuminate\Http\Request;

class GetParticipantController extends Controller
{
    public function __invoke(Request $request, Training $training)
    {
        $limit = $request->input('limit', 15);
        $participant = $training->participant()->orderBy('id', 'desc')->paginate($limit);
        return ParticipantResource::collection($participant);
    }
}
