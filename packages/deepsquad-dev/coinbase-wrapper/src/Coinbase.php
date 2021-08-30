<?php

namespace DeepsquadDev\CoinbaseWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class Coinbase 
{
    const BASE_URI = 'https://api.commerce.coinbase.com';

    private $client;

    private $apiKey;

    private $apiVersion;

    public function __construct()
    {
        $this->apiKey = config('coinbase.apiKey');
        $this->apiVersion = config('coinbase.apiVersion');

        $this->client = new Client([
            'base_uri' => self::BASE_URI,
            'headers' => [
                'Content-Type' => 'application/json',
                'X-CC-Api-Key' => $this->apiKey,
                'X-CC-Version' => $this->apiVersion,
            ],
        ]);
    }

    public function getApiKey()
    {
        return $this->apiKey = $apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiVersion()
    {
        return $this->apiVersion = $apiVersion;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    public function makeRequest(string $method, string $uri, array $query = [], array $params = [])
    {
        try {
            $response = $this->client->request($method, $uri,  [ 'query' => $query , 'body' => json_encode($params)]);

            return json_decode((string) $response->getBody(), true);
        } catch(GuzzleException $e) {
            Log::error($e->getMesssage());
        }
    }

    public function getCharges(array $query = [])
    {
        return $this->makeRequest('get', 'charges', $query);
    }

    public function createCharge(array $params = [])
    {
        return $this->makeRequest('post', 'charges', $params);
    }

    public function getCheckouts(array $query = [])
    {
        return $this->makeRequest('get', 'checkouts', $query);
    }

    public function createCheckout(array $params = [])
    {
        return $this->makeRequest('post', 'checkouts', $params);
    }

    public function getCheckout($checkoutId)
    {
        return $this->makeRequest('get', "checkouts/{$checkoutId}");
    }

    public function updateCheckout($checkoutId, array $params = [])
    {
        return $this->makeRequest('put', "checkouts/{$checkoutId}", $params);
    }

    public function deleteCheckout($checkoutId)
    {
        return $this->makeRequest('delete', "checkouts/{$checkoutId}");
    }

    public function getEvents(array $query = [])
    {
        return $this->makeRequest('get', 'events', $query);
    }

    public function getEvent($eventId)
    {
        return $this->makeRequest('get', "events/{$eventId}");
    }
}