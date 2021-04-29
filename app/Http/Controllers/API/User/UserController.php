<?php

namespace App\Http\Controllers\API\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update_photo(Request $request, User $user)
    {
        $this->validate($request, [
            'profile_photo' => ['required', 'mimes:png,jpg,jpge', 'max:2048'],
        ]);

        if($request->file('profile_photo')) {
            $profile_photo_path = $request->file('profile_photo')->store('profile_photo', 'public');
        }

        $user->update([
            'profile_photo_path' => $profile_photo_path
        ]);

        return ResponseFormatter::success(
            new UserResource($user),
            'succes update profile photo user'
        );
    }
}
