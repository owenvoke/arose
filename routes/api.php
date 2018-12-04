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

Route::resource('accounts', 'Api\AccountController');
Route::resource('blocks', 'Api\BlockController');
Route::resource('masternodes', 'Api\MasternodeController');
Route::resource('mempools', 'Api\MempoolController');
Route::resource('transactions', 'Api\TransactionController');
