<?php

use App\Http\Controllers\Api\AyahController;
use App\Http\Controllers\Api\AyahNameController;
use App\Http\Controllers\Api\AyahNumberController;
use App\Http\Controllers\Api\SurahController;
use App\Http\Controllers\Api\SurahNameController;
use App\Http\Controllers\Api\SurahNumberController;
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

Route::get('surates', SurahController::class);
Route::get('surah_name/{search}', SurahNameController::class);
Route::get('surah_number/{search}', SurahNumberController::class);

Route::get('ayat', AyahController::class);
Route::get('ayah_name/{search}', AyahNameController::class);
Route::get('ayah_number/{search}', AyahNumberController::class);
