<?php

namespace App\Http\Controllers\API\BudgedPerformance;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\BudgedPerformance\BudgedPerformanceResource;
use App\Models\User;
use Illuminate\Http\Request;

class GetBudgedPerformanceController extends Controller
{
    public function __invoke(User $user)
    {
        $budged_performance = $user->budged_performance;
        return ResponseFormatter::success(
            new BudgedPerformanceResource($budged_performance),
            'success get budged performance data'
        );
    }
}
