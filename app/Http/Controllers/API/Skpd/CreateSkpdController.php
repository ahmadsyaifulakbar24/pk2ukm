<?php

namespace App\Http\Controllers\API\SKPD;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\Skpd\SkpdResource;
use App\Models\Skpd;
use App\Models\User;
use Illuminate\Http\Request;

class CreateSkpdController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name_dinas' => ['required', 'string'],
            'nip_dinas' => ['required', 'numeric'],
            'phone_number_dinas' => ['required', 'numeric'],
            'name_responsible_person' => ['required', 'string'],
            'phone_number_responsible_person' => ['required', 'numeric'],
        ]);

        $user = User::find($request->user()->id);
        
        $inputSkpd = $request->all();
        
        if(!$user->skpd) {
            $skpd = $user->skpd()->create($inputSkpd);
            $message = 'success create data skpd';
        } else {
            $user->skpd()->update($inputSkpd);
            $message = 'success update data skpd';
            $skpd = Skpd::find($user->skpd->id);
        }

        return ResponseFormatter::success(
            new SkpdResource($skpd),
            $message
        );
    }
}
