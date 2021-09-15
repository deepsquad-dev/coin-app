<?php

declare(strict_types=1);

namespace DeepsquadDev\EtherscanWrapper\Api;

use DeepsquadDev\EtherscanWrapper\Etherscan;
use Exception;

class Api
{
    protected $client;

    private $apiKey;

    public function __construct(Etherscan $client)
    {
          $this->client = $client;
          $this->apiKey = config('ethrscan.apiKey');
    }

    public function get(string $module, string $action, array $query = []): array
    {
        $params['module']=$module;
        $params['action']=$action;
        $params['apikey']=$this->apiKey;

        $response = $this->client->getHttpClient()->request(
            'GET', '/api', ['query' => $query]
        );

          $this->client->setLastResponse($response);

          return response()->json($response);
    }
}