<?php

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

Route::resource('accounts', 'Api\AccountController')->only(['index', 'show']);
Route::resource('blocks', 'Api\BlockController')->only(['index', 'show']);
Route::resource('masternodes', 'Api\MasternodeController')->only(['index', 'show']);
Route::resource('mempools', 'Api\MempoolController')->only(['index', 'show']);
Route::resource('transactions', 'Api\TransactionController')->only(['index', 'show']);
