<?php

use Illuminate\Support\Facades\Route;
use DeepsquadDev\Blockcypherapis\Blockcypher;

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

# Test Routes#Martin
Route::get('/blockcypher/{name}', function ($sName) {
    $oBc = new Blockcypher();    
    return $oBc->blockcypher($sName);
});