<?php

namespace App\Http\Controllers\API\Participant;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteParticipantController extends Controller
{
    public function __invoke(Participant $participant)
    {
        if($participant->profile_photo) {
            Storage::disk('public')->delete($participant->profile_photo);
        }
        $result = $participant->delete();
        return ResponseFormatter::success(
            $result,
            'success delete participant'
        );

    }
}
