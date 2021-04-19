<?php

namespace App\Http\Controllers\API\BudgedPerformance;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\BudgedPerformance\BudgedPerformanceResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetBudgedPerformanceController extends Controller
{
    public function fetch(User $user)
    {
        $budged_performance = $user->budged_performance;
        return ResponseFormatter::success(
            new BudgedPerformanceResource($budged_performance),
            'success get budged performance data'
        );
    }

    public function persentase_budged_realization()
    {
        $persentase = DB::table('vw_persentase_budged_performance')->first();
        return ResponseFormatter::success(
            $persentase,
            'succes get data persentase budged performance realization'
        );  
    }
}
