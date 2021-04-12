<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use App\Http\Controllers\API\Auth\PasswordResetController;
use App\Http\Controllers\API\Auth\UserController;
use App\Http\Controllers\API\Training\CreateTrainingController;
use App\Http\Controllers\API\Training\DeleteTrainingController;
use App\Http\Controllers\API\Training\GetTrainingController;
use App\Http\Controllers\API\Training\UpdateTrainingController;
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

    Route::prefix('training')->group(function () {
        Route::get('{user_id?}', GetTrainingController::class);
        Route::post('create', CreateTrainingController::class);
        Route::patch('{training:id}/update', UpdateTrainingController::class);
        Route::delete('{training:id}/delete', DeleteTrainingController::class);
    });
});