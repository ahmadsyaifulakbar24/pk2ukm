<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use App\Http\Controllers\API\Auth\PasswordResetController;
use App\Http\Controllers\API\Auth\UserController;
use App\Http\Controllers\API\BudgedPerformance\GetBudgedPerformanceController;
use App\Http\Controllers\API\BudgedPerformance\UpdateBudgedPerformanceController;
use App\Http\Controllers\API\Companion\CreateCompanionController;
use App\Http\Controllers\API\Companion\DeleteCompanionController;
use App\Http\Controllers\API\Companion\GetCompanionController;
use App\Http\Controllers\API\Companion\UpdateCompanionController;
use App\Http\Controllers\API\Param\GetParamController;
use App\Http\Controllers\API\Participant\CreateParticipantController;
use App\Http\Controllers\API\Participant\DeleteParticipantController;
use App\Http\Controllers\API\Participant\GetParticipantController;
use App\Http\Controllers\API\Participant\UpdateParticipantController;
use App\Http\Controllers\API\Report\GetReportController;
use App\Http\Controllers\API\Skpd\CreateSkpdController;
use App\Http\Controllers\API\Skpd\GetSkpdController;
use App\Http\Controllers\API\Training\CreateTrainingController;
use App\Http\Controllers\API\Training\DeleteTrainingController;
use App\Http\Controllers\API\Training\GetTrainingController;
use App\Http\Controllers\API\Training\UpdateTrainingController;
use App\Http\Controllers\API\User\GetUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', LoginController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', LogoutController::class);
    Route::get('user', UserController::class);
    Route::post('password_reset', PasswordResetController::class);

    Route::prefix('user')->group(function () {
        Route::get('/', [GetUserController::class, 'get']);
    });
    Route::prefix('training')->group(function () {
        Route::get('{user_id?}', GetTrainingController::class);
        Route::post('create', CreateTrainingController::class);
        Route::patch('{training:id}/update', [UpdateTrainingController::class, 'training']);
        Route::patch('{training:id}/update_status', [UpdateTrainingController::class, 'status']);
        Route::delete('{training:id}/delete', DeleteTrainingController::class);
    });

    Route::prefix('skpd')->group(function () {
        Route::get('{user_id?}', [GetSkpdController::class, 'get']);
        Route::get('{province_id}/get_by_province', [GetSkpdController::class, 'get_by_province']);
        Route::post('create', CreateSkpdController::class);
    });

    Route::prefix('budged_performance')->group(function () {
        Route::get('{user:id}/get', [GetBudgedPerformanceController::class, 'fetch']);
        Route::get('{province_id}/by_province', [GetBudgedPerformanceController::class, 'by_province']);
        Route::get('persentase_budged_realization', [GetBudgedPerformanceController::class, 'persentase_budged_realization']);
        Route::post('update', UpdateBudgedPerformanceController::class);
    });

    Route::prefix('participant')->group(function () {
        Route::get('{training:id}', GetParticipantController::class);
        Route::post('{training:id}/create', CreateParticipantController::class);
        Route::post('{participant:id}/update', UpdateParticipantController::class);
        Route::delete('{participant:id}/delete', DeleteParticipantController::class);
    });

    Route::prefix('param')->group(function () {
        Route::get('education', [GetParamController::class, 'education']);
        Route::get('religion', [GetParamController::class, 'religion']);
        Route::get('business_status', [GetParamController::class, 'business_status']);
        Route::get('business_sector', [GetParamController::class, 'business_sector']);
        Route::get('position_umkm', [GetParamController::class, 'position_umkm']);
        Route::get('type_koperasi', [GetParamController::class, 'type_koperasi']);
        Route::get('position_koperasi', [GetParamController::class, 'position_koperasi']);
        Route::get('training_needs', [GetParamController::class, 'training_needs']);
        Route::get('training_type', [GetParamController::class, 'training_type']);
    });

    Route::prefix('companion')->group(function () {
        Route::get('/', GetCompanionController::class);
        Route::post('/', CreateCompanionController::class);
        Route::post('{user:id}/update', UpdateCompanionController::class);
        Route::delete('{user_id}/delete', DeleteCompanionController::class);
    });

    Route::prefix('report')->group(function () {
        Route::get('total_participant_by_gender', [GetReportController::class, 'total_participant_by_gender']);
        Route::get('total_participant_by_religion', [GetReportController::class, 'total_participant_by_religion']);
        Route::get('total_participant_by_training_type', [GetReportController::class, 'total_participant_by_training_type']);
        Route::get('total_participant_by_education', [GetReportController::class, 'total_participant_by_education']);
        Route::get('total_participant_by_business_status', [GetReportController::class, 'total_participant_by_business_status']);
        Route::get('total_user_by_province', [GetReportController::class, 'total_user_by_province']);
        Route::get('total_training_by_province', [GetReportController::class, 'total_training_by_province']);
        Route::get('total_companion_by_province', [GetReportController::class, 'total_companion_by_province']);
    });
});