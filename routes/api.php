<?php

use App\Http\Controllers\CostCategoryController;
use App\Http\Controllers\CostRecordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Users\CostCategories\CostRecordController as CostCategoriesCostRecordController;
use App\Http\Controllers\Users\CostRecordController as UsersCostRecordController;
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

Route::apiResource('users', UserController::class, ['only' => ['store']]);

Route::apiResource('cost_categories', CostCategoryController::class, ['only' => ['index', 'store']]);

Route::apiResource('cost_records', CostRecordController::class, ['only' => ['store']]);

Route::apiResource('users.cost_records', UsersCostRecordController::class, ['only' => ['index']]);

Route::apiResource('users.cost_categories.cost_records', CostCategoriesCostRecordController::class, ['only' => ['index']]);



