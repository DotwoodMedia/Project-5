<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\OefeningController;
use App\Http\Controllers\PrestatiesController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user/prestaties', function (Request $request) {
    return $request->user()->prestaties()->get();
});

Route::middleware('auth:sanctum')->get('/user/oefeningen', function (Request $request) {
    return $request->user()->oefeningen()->get();
});

Route::apiResource('users', UserController::class);
Route::apiResource('prestaties', PrestatiesController::class);
Route::apiResource('oefeningen', OefeningController::class);

Route::post('/register', [AuthenticationController::class, 'register']);

Route::post('/login', [AuthenticationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

// PROTECTED ROUTES

Route::get('profile', function(Request $request) { return auth()->user();});

Route::post('/logout', [AuthenticationController::class, 'logout']);

});