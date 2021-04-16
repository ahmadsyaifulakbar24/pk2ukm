<?php

namespace App\Http\Controllers\API\Companion;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Companion\CompanionResource;
use App\Models\Companion;
use Illuminate\Http\Request;

class GetCompanionController extends Controller
{
    public function __invoke(Request $request)
    {
        
        $this->validate($request, [
            'parent_user_id' => ['nullable', 'exists:users,id'],
            'user_id' => ['nullable', 'exists:users,id'],
        ]);

        
        if(!$request->parent_user_id && !$request->user_id) {
            return ResponseFormatter::error([
                'message' => 'wrong parameter'
            ], 'failed get companion data', 401);
        }
        
        if($request->parent_user_id) {
            $companion = Companion::where('parent_user_id', $request->parent_user_id)->get();
        }

        if($request->user_id) {
            return $companion = Companion::where('user_id', $request->user_id)->first();
        }

        return ResponseFormatter::success(
            CompanionResource::collection($companion),
            'success get companion data'
        );
    }
}
