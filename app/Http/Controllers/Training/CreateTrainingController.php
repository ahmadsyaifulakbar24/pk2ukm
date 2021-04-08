<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CreateTrainingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = User::find($request->user()->id);
        $this->validate($request, [
            'training_type_id' => [
                'required',
                Rule::exists('params', 'id')->where(function ($query) {
                    return $query->where('category_param', 'training_type');
                }),
            ], 
        ]);
    }
}
