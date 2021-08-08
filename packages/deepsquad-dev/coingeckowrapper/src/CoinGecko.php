<?php

declare (strict_types=1);

namespace DeepsquadDev\Coingeckowrapper;

use DeepsquadDev\Coingeckowrapper\Api\Asset;
use DeepsquadDev\Coingeckowrapper\Api\Coins;
use DeepsquadDev\Coingeckowrapper\Api\Contract;
use DeepsquadDev\Coingeckowrapper\Api\Derivatives;
use DeepsquadDev\Coingeckowrapper\Api\Events;
use DeepsquadDev\Coingeckowrapper\Api\ExchangeRates;
use DeepsquadDev\Coingeckowrapper\Api\Exchanges;
use DeepsquadDev\Coingeckowrapper\Api\Finance;
use DeepsquadDev\Coingeckowrapper\Api\Globals;
use DeepsquadDev\Coingeckowrapper\Api\Indexes;
use DeepsquadDev\Coingeckowrapper\Api\Ping;
use DeepsquadDev\Coingeckowrapper\Api\Simple;
use DeepsquadDev\Coingeckowrapper\Api\StatusUpdates;
use DeepsquadDev\Coingeckowrapper\Api\Trending;
use DeepsquadDev\Coingeckowrapper\Api\PublicTreasury;
use Exception;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class CoinGecko
{
  protected const BASE_URI = 'https://api.coingecko.com';

  private $requester;

  protected $lastResponse;

  public function __construct(?Client $client = null)
  {
      $this->requester = $client ?: new Client(['base_uri' => self::BASE_URI]);
  }

  public function getHttpClient(): client
  {
      return $this->requester;
  }

  public function ping(): array
  {
      return (new Ping($this))->ping();
  }

  public function simple(): Simple
  {
      return new Simple($this);
  }

  public function coins(): Coins
  {
      return new Coins($this);
  }

  public function contract(): Contract
  {
      return new Contract($this);
  }

  public function asset(): Asset
  {
      return new Asset($this);
  }

  public function exchanges(): Exchanges
  {
      return new Exchanges($this);
  }

  public function finance(): Finance
  {
      return new Finance($this);
  }

  public function indexes(): Indexes
  {
      return new Indexes($this);
  }

  public function derivatives(): Derivatives
  {
      return new Derivatives($this);
  }

  public function statusUpdates(): StatusUpdates
  {
      return new StatusUpdates($this);
  }

  public function events(): Events
  {
      return new Events($this);
  }

  public function exchangesRates(): ExchangesRates
  {
      return new ExchangesRates($this);
  }

  public function trending(): Trending
  {
      return new Trending($this);
  }

  public function globals(): Globals
  {
      return new Globals($this);
  }

  public function publicTreasury(): PublicTreasury
  {
      return new PublicTreasury($this);
  }

  public function setLastResponse(ResponseInterface $response)
  {
      return $this->lastResponse = $response;
  }

  public function getLastResponse(): ?ResponseInterface
  {
      return $this->lastResponse;
  }
}
