<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use DeepsquadDev\Coingeckowrapper\CoinGecko;
use DeepsquadDev\Coingeckowrapper\Message\ResponseTransformer;
use Exception;

class Api
{
    protected $client;

    private $version = 'v3';

    protected $transformer;

    public function __construct(CoinGecko $client)
    {
          $this->client = $client;
          $this->transformer = new ResponseTransformer();
    }

    public function get(string $uri, array $query = []): array
    {
          $response = $this->client->getHttpClient()->request(
              'GET',
              '/api/' . $this->version . $uri, ['query' => $query]
          );
          $this->client->setLastResponse($response);

          return $this->transformer->transform($response);
    }
}
