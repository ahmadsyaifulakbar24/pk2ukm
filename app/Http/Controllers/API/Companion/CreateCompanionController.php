<?php

namespace App\Http\Controllers\API\Companion;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Companion\CompanionResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CreateCompanionController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required', 'min:8'],
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
            $profile_photo_path = $request->file('profile_photo')->store('profile_photo', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role_id' => '201',
            'profile_photo_path' => !empty($profile_photo_path) ? $profile_photo_path : NULL,
        ]);

        $inputCompanion = $request->all();
        $user_parent = User::where([['role_id', '200'], ['id', $request->user()->id]])->first();
        $inputCompanion['parent_user_id'] = $user_parent->id;
        $companion = $user->companion()->create($inputCompanion);

        return ResponseFormatter::success(
            new CompanionResource($companion),
            'success create account companion',
        );
    }
}
