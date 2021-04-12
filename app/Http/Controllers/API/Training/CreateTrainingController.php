<?php

namespace App\Http\Controllers\API\Training;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Training\TrainingResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CreateTrainingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = User::find($request->user()->id);
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

        $inputTraining = $request->all();
        $inputTraining['province_id'] =  $user->province_id;
        $training = $user->training()->create($inputTraining);

        return ResponseFormatter::success(
            new TrainingResource($training),
            'success create training data'
        );
    }
}
