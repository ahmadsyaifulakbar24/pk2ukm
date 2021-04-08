<?php

namespace App\Http\Controllers\API\Auth;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'old_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'min:8']
        ]);
        $user = User::find($request->user()->id);
        if(!Hash::check($request->old_password, $user->password)) {
            return ResponseFormatter::error(
                ['message' => 'old password is wrong'],
                'Password Reset Failed',
                401
            );
        }
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        return ResponseFormatter::success(
            $user,
            'password reset is successful'
        );
    }
}
