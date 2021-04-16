<?php

namespace App\Http\Controllers\API\Skpd;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Skpd\SkpdResource;
use App\Models\Skpd;
use App\Models\User;
use Illuminate\Http\Request;

class GetSkpdController extends Controller
{
    public function __invoke(Request $request, $user_id = null) 
    {
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
            $limit = $request->input('limit', 15);
            $skpd = Skpd::paginate($limit);
            return SkpdResource::collection($skpd);
        }
    }
}
