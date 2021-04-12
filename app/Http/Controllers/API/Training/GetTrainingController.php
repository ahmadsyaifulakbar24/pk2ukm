<?php

namespace App\Http\Controllers\API\Training;

use App\Http\Controllers\Controller;
use App\Http\Resources\Training\TrainingResource;
use App\Models\Training;
use Illuminate\Http\Request;

class GetTrainingController extends Controller
{
    public function __invoke(Request $request, $user_id = null)
    {
        $limit = $request->input('limit', 15);
        $training = Training::orderBy('id', 'desc');

        if($user_id) {
            $training->where('user_id', $user_id);
        }

        $result = $training->paginate($limit);
        
        return TrainingResource::collection($result);
    }
}
