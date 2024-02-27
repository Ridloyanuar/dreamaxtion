<?php

use App\Http\Controllers\OneController;
use App\Http\Controllers\ThreeController;
use App\Http\Controllers\TwoController;
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

Route::get('/one', [OneController::class, 'one']);
Route::get('/two', [TwoController::class, 'sortArr']);
Route::post('/three', [ThreeController::class, 'price']);
