<?php

namespace App\Http\Controllers\API\BudgedPerformance;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\BudgedPerformance\BudgedPerformanceResource;
use App\Http\Resources\BudgedPerformance\UserBudgedPerformanceResource;
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

    public function all_data($province_id = null) 
    {
        $user = User::query();
        $user->with('budged_performance')->where('role_id', 200);
        if($province_id) {
            $user->where('province_id', $province_id);
        }
        $user->orderBy('order_province', 'ASC')->orderBy('order_city', 'ASC');
        return ResponseFormatter::success(
            UserBudgedPerformanceResource::collection($user->get()),
            'success get budged performance by id'
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
