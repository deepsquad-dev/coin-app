<?php

use Illuminate\Support\Facades\Route;
use DeepsquadDev\Blockcypherapis\Blockcypher;
use DeepsquadDev\CoinbaseWrapper\Coinbase;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
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