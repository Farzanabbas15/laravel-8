<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\secondapiController;
use App\Http\Controllers\thirdapiController;
use App\Http\Controllers\fourthapiController;

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

//Route::get('show',[apiController::class,'getData']);
//Route::get('show/{id?}',[secondapiController::class,'getData']);
//Route::post('add',[thirdapiController::class,'postData']);
Route::put('update',[fourthapiController::class,'updateData']);
Route::delete('delete/{id}',[fourthapiController::class,'deleteData']);
Route::get('search/{device}',[fourthapiController::class,'searchData']);