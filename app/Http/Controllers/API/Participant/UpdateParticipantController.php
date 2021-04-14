<?php

namespace App\Http\Controllers\API\Participant;

use App\Helpers\FileHelpers;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Participant\ParticipantResource;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UpdateParticipantController extends Controller
{
    public function __invoke(Request $request, Participant $participant)
    {
        if($request->business_status_id == 14) {
            $umkm = 'required';
            $koperasi = 'nullable';
        } else if($request->business_status_id == 15) {
            $umkm = 'nullable';
            $koperasi = 'required';
        } else {
            $umkm = 'nullable';
            $koperasi = 'nullable';
        }

        $this->validate($request, [
            // profile
            'name' => ['required', 'string'],
            'gender' => ['required', 'in:laki-laki,perempuan'],
            'religion_id' => [
                'required',
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'religion');
                })
            ],
            'id_number' => ['required', 'numeric'],
            'place_birth' => ['required', 'string'],
            'education_id' => [
                'required',
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'education');
                })
            ],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'province_id' => ['required', 'exists:provinces,id'],
            'districts_city_id' => ['required', 'exists:districts_cities,id'],
            'profile_photo' => ['nullable', 'mimes:png,jpg,jpge', 'max:2048'],

            // busines status
            'business_status_id' => [
                'required',
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'business_status');
                })
            ],

            // umkm
            'name_umkm' => [$umkm, 'string'],
            'address_umkm' => [$umkm, 'string'],
            'business_sector_id' => [
                $umkm,
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'business_sector');
                })
            ],
            'date_establishment_umkm' => [$umkm, 'date'],
            'no_iumk' => [$umkm, 'string'],
            'position_umkm_id' => [
                $umkm,
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'position_umkm');
                })
            ],
            'business_turnover' => [$umkm, 'numeric'],
            'number_employees' => [$umkm, 'numeric'],

            // koperasi
            'name_koperasi' => [$koperasi, 'string'],
            'address_koperasi' => [$koperasi, 'string'],
            'type_koperasi_id' => [
                $koperasi, 
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'type_koperasi');
                })
            ],
            'date_establishment_koperasi' => [$koperasi, 'date'],
            'registrasion_number_koperasi' => [$koperasi, 'string'],
            'position_koperasi_id' => [
                $koperasi,
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'position_koperasi');
                })
            ],
        ]);

        $input = $request->all();
        if($request->business_status_id == 14) {
            $input['name_koperasi'] = null;
            $input['address_koperasi'] = null;
            $input['type_koperasi_id'] = null;
            $input['date_establishment_koperasi'] = null;
            $input['registrasion_number_koperasi'] = null;
            $input['position_koperasi_id'] = null;
        } else if($request->business_status_id == 15) {
            $input['name_umkm'] = null;
            $input['address_umkm'] = null;
            $input['business_sector_id'] = null;
            $input['date_establishment_umkm'] = null;
            $input['no_iumk'] = null;
            $input['position_umkm_id'] = null;
            $input['business_turnover'] = null;
            $input['number_employees'] = null;
        } else {
            $input['name_koperasi'] = null;
            $input['address_koperasi'] = null;
            $input['type_koperasi_id'] = null;
            $input['date_establishment_koperasi'] = null;
            $input['registrasion_number_koperasi'] = null;
            $input['position_koperasi_id'] = null;
            $input['name_umkm'] = null;
            $input['address_umkm'] = null;
            $input['business_sector_id'] = null;
            $input['date_establishment_umkm'] = null;
            $input['no_iumk'] = null;
            $input['position_umkm_id'] = null;
            $input['business_turnover'] = null;
            $input['number_employees'] = null;
        }

        if($request->file('profile_photo')) {
            $path = FileHelpers::upload_file('participant_photo', $request->file('profile_photo'));
            $input['profile_photo'] = $path;
            if($participant->profile_photo) {
                Storage::disk('public')->delete($participant->profile_photo);
            }
        }

        $participant_id = $participant->update($input);
        return ResponseFormatter::success(
            new ParticipantResource(Participant::find($participant_id)),
            'success update participant',
        );
    }
}
