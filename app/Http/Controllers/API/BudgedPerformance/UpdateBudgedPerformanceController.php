<?php

namespace App\Http\Controllers\API\BudgedPerformance;

use App\Helpers\FileHelpers;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\BudgedPerformance\BudgedPerformanceResource;
use App\Models\BudgedPerformance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateBudgedPerformanceController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'budged_realization1' => ['nullable', 'numeric'],
            'document_budged_realization1' => ['nullable', 'mimes:pdf', 'max:2048'],
            'budged_realization2' => ['nullable', 'numeric'],
            'document_budged_realization2' => ['nullable', 'mimes:pdf', 'max:2048'],
        ]);

        $user = User::find($request->user()->id);
        if($request->file('document_budged_realization1')) {
            $path1 = FileHelpers::upload_file('document_budged_realization', $request->file('document_budged_realization1'));
            $input['document_budged_realization1'] = $path1;
            if($user->budged_performance->document_budged_realization1) {
                Storage::disk('public')->delete($user->budged_performance->document_budged_realization1);
            }
        }

        if($request->file('document_budged_realization2')) {
            $path2 = FileHelpers::upload_file('document_budged_realization', $request->file('document_budged_realization2'));
            $input['document_budged_realization2'] = $path2;
            if($user->budged_performance->document_budged_realization2) {
                Storage::disk('public')->delete($user->budged_performance->document_budged_realization2);
            }
        }

        $input['budged_realization1'] = $request->budged_realization1;
        $input['budged_realization2'] = $request->budged_realization2;
        $user->budged_performance()->update($input);
        
        
        return ResponseFormatter::success(
            new BudgedPerformanceResource($user->budged_performance),
            'success update budged performance data'
        );
    }

   
}
