<?php 

return [
    'apiToken'  => env('BLOCKCYPHER_API_TOKEN'),
    'baseURL'   => env('BLOCKCYPHER_BASE_URL', 'https://api.blockcypher.com'),
    'version'   => env('BLOCKCYPHER_API_VERSION', '/v1')
];