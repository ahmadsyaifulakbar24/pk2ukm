<?php

namespace App\Http\Controllers\API\Training;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Training\TrainingResource;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateTrainingController extends Controller
{
    public function training(Request $request, Training $training)
    {
        $this->validate($request, [
            'training_type_id' => [
                'required',
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'training_type');
                }),
            ], 
            'training_title' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'finish_date' => ['required', 'date'],
            'place' => ['required', 'string'],
            'districts_city_id' => ['required', 'exists:districts_cities,id'],
        ]);

        $updateTraining = $request->all();
        $training->update($updateTraining);

        return ResponseFormatter::success(
            new TrainingResource($training),
            'success update training data'    
        );

    }

    public function status(Request $request, Training $training)
    {
        $this->validate($request, [
            'status' => ['required', 'in:publish,unpublish'],
        ]);
        
        $training->update([ 'status' => $request->status ]);
        return ResponseFormatter::success(
            new TrainingResource($training),
            'success update data status training'
        );

    }
}
