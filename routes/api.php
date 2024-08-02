<?php

use App\Http\Controllers\EmailParserController;
use App\Http\Controllers\JsonMapperController;
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

Route::post('json-mapper', JsonMapperController::class);
Route::post('email-parser', EmailParserController::class);
