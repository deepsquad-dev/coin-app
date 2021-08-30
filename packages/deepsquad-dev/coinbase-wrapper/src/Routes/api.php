<?php 

Route::group(['prefix' => 'api', 'middleware' => 'api'], function() {
    Route::post('coinbase/webhook', '\DeepsquadDev\CoinbaseWrapper\Http\Controllers\WebhookController')->name('coinbase-webhook');
});