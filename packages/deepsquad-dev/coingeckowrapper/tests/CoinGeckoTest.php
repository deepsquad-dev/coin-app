<?php

declare (strict_types=1);

//namespace DeepsquadDev\Coingeckowrapper;

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

class CoinGeckoTest extends TestCase
{
      public function test()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Client::class, $client->getHttpClient());
      }

      public function testPing()
      {
          $client = new CoinGecko();

          $this->assertIsArray($client->ping());
      }

      public function testSimple()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Simple:class, $client->simple());
      }

      public function testCoins()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Coins::class, $client->coins());
      }

      public function testContract()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Contract::class, $client->contract());
      }

      public function testExchanges()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Exchanges::class, $client->exchanges());
      }

      public function testFinance()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Finance:class, $client->finance());
      }

      public function testindexes()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Indexes::class, $client->indexes());
      }

      public function testExchangeRates()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(ExchangeRates::class, $client->exchangeRates());
      }

      public function testGlobals()
      {
          $client = new CoinGecko();

          $this->assertInstanceOf(Globals::class, $client->globals());
      }

      public function testGetLastResponseIsNull()
      {
          $client = new CoinGecko();

          $this->assertNull($client->getLastResponse());
      }

      public function testSetLastResponse()
      {
          $client = new CoinGecko();
          $response = $this->createMock(ResponseInterface::class);
          $client->setLastResponse($response);
          
          $this->assertInstanceOf(Globals::class, $client->globals());
      }
}
