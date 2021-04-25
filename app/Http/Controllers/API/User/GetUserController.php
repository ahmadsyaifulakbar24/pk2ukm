<?php

namespace App\Http\Controllers\API\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class GetUserController extends Controller
{
    public function get (Request $request)
    {
        $this->validate($request, [
            'limit' => ['nullable', 'numeric'],
            'user_id' => ['nullable', 'exists:users,id'],
            'province_id' => ['nullable', 'exists:provinces,id']
        ]);
        $user = User::query();
        $limit = $request->input('limit', 15);
        
        if($request->user_id) {
            $user_data = $user->find($request->user_id);
            return ResponseFormatter::success(
                new UserResource($user_data),
                'success get data user',
            );
        }

        if($request->province_id) {
            $user->where('province_id', $request->province_id);
        }
        return UserResource::collection($user->paginate($limit));
        
    }
}
