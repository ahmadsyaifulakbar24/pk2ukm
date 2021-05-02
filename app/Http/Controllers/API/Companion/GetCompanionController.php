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
            $companion = Companion::all();
            $return_companion = CompanionResource::collection($companion);
        }
        
        if($request->parent_user_id) {
            $companion = Companion::where('parent_user_id', $request->parent_user_id)->get();
            $return_companion = CompanionResource::collection($companion);
        }

        if($request->user_id) {
            $companion = Companion::where('user_id', $request->user_id)->first();
            if($companion) {
                $return_companion = new CompanionResource($companion);
            } else {
                return ResponseFormatter::error([
                    'message' => 'data not found'
                ], 'error get companion data', 404);
            }
        }

        return ResponseFormatter::success(
            $return_companion,
            'success get companion data'
        );
    }
}
