<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//controller imports
use App\Http\Controllers\AssetManagement\AssetController;
use App\Http\Controllers\AssetManagement\AssetCategoryController;
use App\Http\Controllers\Utilities\OrganisationController;
use App\Http\Controllers\Utilities\DepartmentController;
use App\Http\Controllers\Utilities\DivisionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('asset', AssetController::class);
Route::resource('assetcategory', AssetCategoryController::class);
Route::resource('myorganisation', OrganisationController::class);
Route::resource('department', DepartmentController::class);
Route::resource('division', DivisionController::class);



