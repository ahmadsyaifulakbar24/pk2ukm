<?php

namespace App\Http\Controllers\API\Companion;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Companion\CompanionResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UpdateCompanionController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'profile_photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:2048'],

            'no_ktp' => ['nullable', 'numeric'],
            'status' => ['nullable', 'in:lajang,menikah'],
            'gender' => ['nullable', 'in:laki-laki,perempuan'],
            'place_birth' => ['nullable', 'string'],
            'date_birth' => ['nullable', 'date'],
            'religion_id' => [
                'nullable',
                Rule::exists('params', 'id')->where(function ($query) {
                    $query->where('category_param', 'religion');
                })
            ],
            'education_id' => [
                'nullable',
                Rule::exists('params', 'id')->where(function ($query) {
                    $query->where('category_param', 'education');
                })
            ],
            'home_address' => ['nullable', 'string'],
            'districts_city_id' => ['nullable', 'exists:districts_cities,id'],
            'phone_number' => ['nullable', 'numeric'],
            'email' => ['nullable', 'string'],
        ]);

        if($request->file('profile_photo')) {
            $profile_photo_path = $request->File('profile_photo')->store('profile_photo', 'public');
            if(Storage::disk('public')->exists(($user->profile_photo_path))) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }
        }

        $user = User::where([['id', $user->id], ['role_id', 200]])->first();
        $user->update([
            'name' => $request->name,
            'profile_photo_path' => !empty($profile_photo_path) ? $profile_photo_path : NULL,
        ]);

        
        $user->companion()->update([
            'no_ktp' => $request->no_ktp,
            'status' => $request->status,
            'gender' => $request->gender,
            'place_birth' => $request->place_birth,
            'date_birth' => $request->date_birth,
            'religion_id' => $request->religion_id,
            'education_id' => $request->education_id,
            'home_address' => $request->home_address,
            'districts_city_id' => $request->districts_city_id,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);
        
        return ResponseFormatter::success(
            new CompanionResource($user->companion),
            'success update account companion',
        );
    }
}
