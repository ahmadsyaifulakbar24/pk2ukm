<?php

namespace App\Http\Controllers\API\Skpd;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Skpd\SkpdResource;
use App\Http\Resources\Skpd\UserSkpdResource;
use App\Models\Skpd;
use App\Models\User;
use Illuminate\Http\Request;

class GetSkpdController extends Controller
{
    public function get(Request $request, $user_id = null) 
    {
        $this->validate($request, [
            'use_limit' => ['nullable', 'in:true,false'],
        ]);

        if($user_id) {
            $skpd = Skpd::where('user_id', $user_id)->first();

            if(!$skpd) {
                return ResponseFormatter::error([
                    'message' => 'data not found',
                ], 'error get data skpd', 404);
            }

            return ResponseFormatter::success(
                new SkpdResource($skpd),
                'success get data skpd'
            );
        } else {
            if($request->use_limit == 'true') {
                $limit = $request->input('limit', 15);
                $skpd = Skpd::paginate($limit);
            } else {
                $skpd = Skpd::all();
            }
            return SkpdResource::collection($skpd);
        }
    }

    public function get_by_province($province_id)
    {
        $userSkpd = User::with('skpd')->where('province_id', $province_id)->get();
        return ResponseFormatter::success(
            UserSkpdResource::collection($userSkpd),
            'success get data skpd by province',
        );
    }
}
