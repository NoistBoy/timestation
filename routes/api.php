<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmployeeController;
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
Route::get('/employees', '\App\Http\Controllers\EmployeeController@getCustomers');
Route::post('/login', '\App\Http\Controllers\EmployeeController@login');
Route::post('/markattandence', '\App\Http\Controllers\EmployeeController@markattandence');
Route::post('/markofflineattandence','\App\Http\Controllers\EmployeeController@markofflineattandence');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
