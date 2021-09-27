<?php 

    return [
        'apiKey' => env('CMC_PRO_API_KEY'),

        'uri' => env('COINMARKETCAP_URI', 'https://pro-api.coinmarketcap.com'),

        'version' => env('COINMARKETCAP_API_VERSION')
    ];