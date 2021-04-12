<?php

namespace App\Http\Controllers\API\Training;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Training;

class DeleteTrainingController extends Controller
{
    public function  __invoke(Training $training)
    {
        $result = $training->delete();
        return ResponseFormatter::success(
            $result,
            'success delete training'
        );
    }
}
