<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'emp'], function () {
    Route::get('employee',[EmployeeController::class,'index']);
    Route::post('employee',[EmployeeController::class,'create']);
    Route::get('employee/{id}',[EmployeeController::class,'show']);
    Route::put('employee/{id}',[EmployeeController::class,'update']);
    Route::delete('employee/{id}',[EmployeeController::class,'destroy']);


});
