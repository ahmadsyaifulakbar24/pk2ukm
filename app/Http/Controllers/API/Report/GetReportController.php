<?php

namespace App\Http\Controllers\API\Report;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetReportController extends Controller
{
    public function total_participant_by_gender()
    {
        $total = DB::table('vw_total_participant_by_gender')->first();
        return ResponseFormatter::success(
            $total,
            'success get data total by gender'
        );
    }

    public function total_participant_by_religion()
    {
        $total = DB::table('vw_total_participant_by_religion')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total participant by religion'
        );
    }

    public function total_participant_by_training_type()
    {
        $total = DB::table('vw_total_participant_by_training_type')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total participant by training type'
        );
    }

    public function total_participant_by_education()
    {
        $total = DB::table('vw_total_participant_by_education')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total participant by education'
        );
    }

    public function total_participant_by_business_status()
    {
        $total = DB::table('vw_total_participant_by_business_status')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total participant by business status'
        );
    }

    public function total_user_by_province()
    {
        $total = DB::table('vw_total_user_by_province')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total user by province'
        );
    }

    public function total_training_by_province()
    {
        $total = DB::table('vw_total_training_by_province')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total training by province'
        );
    }
    
    public function total_companion_by_province()
    {
        $total = DB::table('vw_total_companion_by_province')->get();
        return ResponseFormatter::success(
            $total,
            'success get data total companion by province'
        );
    }
}
