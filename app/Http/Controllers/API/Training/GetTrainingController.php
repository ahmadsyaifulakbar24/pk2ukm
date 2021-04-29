<?php

namespace App\Http\Controllers\API\Training;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Training\TrainingResource;
use App\Http\Resources\Training\TrainingUserResource;
use App\Models\Training;
use Illuminate\Http\Request;

class GetTrainingController extends Controller
{
    public function all(Request $request, $user_id = null)
    {
        $limit = $request->input('limit', 15);
        $training = Training::orderBy('id', 'desc');

        if($user_id) {
            $training->where('user_id', $user_id);
        }

        $result = $training->paginate($limit);
        
        return TrainingResource::collection($result);
    }

    public function by_id(Training $training)
    {
        return ResponseFormatter::success(
            new TrainingResource($training),
            'success get data training'
        );
    }

    public function with_user($user_id = null)
    {
        $training = Training::query();
        if($user_id) {
            $training->where('user_id', $user_id);
        }

        $training->with(['participant' => function($query) {
            $query->with('monitoring');
        }]);

        return ResponseFormatter::success(
            TrainingUserResource::collection($training->get()),
            'success get data training with user',
        );
    }
}
