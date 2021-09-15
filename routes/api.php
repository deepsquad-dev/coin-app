<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DeepsquadDev\Blockcypherapis\Blockcypher;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

# Test Routes
Route::get('/blockcypher/name/{name}', function ($sName) {
    $oBc = new Blockcypher();    
    return $oBc->blockcypher($sName);
});

Route::get('/blockcypher/blockchain', function () {
    $oBcB = new Blockcypher();    
    return $oBcB->getBlockchain('bitcoin', 'main');
});