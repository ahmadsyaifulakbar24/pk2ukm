<?php

namespace App\Http\Controllers\API\Companion;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteCompanionController extends Controller
{
    public function __invoke($user_id)
    {
        $user = User::where([['id', $user_id], ['role_id', 201]])->first();

        if($user) {
            if(Storage::disk('public')->exists($user->profile_photo_path)) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }
    
            $result = $user->delete();
    
            return ResponseFormatter::success(
                $result,
                'success delete companion data'
            );
        } else {
            return ResponseFormatter::error([
                'message' => 'companion data not found',
            ], 'error delete companion data', 404); 
        }
    }
}
