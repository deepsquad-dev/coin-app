<?php 

namespace DeepsquadDev\Blockcypherapis;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class Blockcypher
{
    protected const BASE_URI = 'https://api.blockcypher.com';

    protected $apiToken = '';
    protected $httpClient = null;
    //protected $baseUrl = '';
    protected $version = '';

    public function __construct()
    { 
        $this->apiToken = config('blockcypher.apiToken');
        //$this->baseUrl = config('blockcypher.baseURL');
        $this->version = config('blockcypher.version');
        
        $this->httpClient = new Client([
            'base_uri' => self::BASE_URI 
        ]);
    }
    
    public function makeRequest(string $method, string $uri, array $query = [], array $params = [])
    {
        try {
            dd($this->httpClient->request($method, $uri,[], []));
            $response = $this->httpClient->request($method, $uri,  [ 'query' => $query , 'body' => json_encode($params)]);

            return json_decode((string) $response->getBody(), true);
        } catch(GuzzleException $e) {
            dd($e);
            Log::error($e->getMesssage());
        }
    }

    public function blockcypher(String $sName)
    {
        return "OK " . $sName . " put your hands up and give me all the money.";
    }

    public function getBlockchain(string $coin, string $chain)
    {
        return $this->makeRequest('get', "/{$this->version}/{$coin}/{$chain}");
    }

    public function getBlocks(string $coin, string $chain, $block)
    {
        return $this->makeRequest('get', "/{$this->version}/{$coin}/{$chain}/blocks/{$block}", $query);
    }

}