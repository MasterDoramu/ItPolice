<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\GoodsController;
use App\Http\Controllers\Api\v1\BasketController;
use App\Http\Controllers\Api\v1\TelegramController;
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

Route::resource('telegram', TelegramController::class);
Route::resource('basket', BasketController::class);
Route::resource('goods', GoodsController::class);
