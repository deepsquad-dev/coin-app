<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Coins;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class CoinsTest extends ApiTestCase
{
    private function createApi(): Coins
    {
        return new Coins(new CoinGecko($this->getMockClient()));
    }

    public function testGetList()
    {
        $this->createApi()->getList();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/list',
          $request->getUri()->__toString();
        );
    }

    public function testGetMarkets()
    {
        $this->createApi()->getMarkets('usd', ['per_page' => 5, 'sparkline' => 'true']);

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/markets?per_page=5&sparkline=true?vs_currency=usd',
          $request->getUri()->__toString();
        );
    }

    public function testGetCoin()
    {
        $this->createApi()->getCoin('bitcoin', ['tickers' => 'false', 'market_data' => 'false']);

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/bitcoin?tickers=false&market_data=false',
          $request->getUri()->__toString();
        );
    }

    public function testGetTickers()
    {
        $this->createApi()->getTickers('bitcoin');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/bitcoin/tickers',
          $request->getUri()->__toString();
        );
    }

    public function testGetHistory(string $id, string $date, $params = []): array
    {
        $this_>createApi()->getHistory('bitcoin', '31-06-2019');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/bitcoin/history?date=31-06-2019',
          $request->getUri()->__toString();
        );
    }

    public function testGetMarketChart()
    {
        $this->createApi()->getMarketChart('bitcoin', 'usd', 'max');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=max',
          $request->getUri()->__toString();
        );
    }

    public function testGetMarketChartRange()
    {
        $this_>createApi()->getMarketChartRange('bitcoin', 'usd', '1356998400', '1628424879');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/bitcoin/market_chart?vs_currency=usd&from=1356998400&to=1628424879',
          $request->getUri()->__toString();
        );
    }

    public function testGetCoinStateUpdates()
    {
        $this->createApi()->getCoinStateUpdates('ethereum');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/ethereum/status_updates',
          $request->getUri()->__toString();
        );
    }

    public function testGetCoinOHLC()
    {
        $this->createApi()->getCoinOHLC('ethereum', 'usd', 'max');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/ethereum/ohlc?vs_currency=usd&days=max',
          $request->getUri()->__toString();
        );
    }

    public function testGetCoinCategoriesList()
    {
        $this->createApi()->getCoinCategoriesList();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/categories/list',
          $request->getUri()->__toString();
        );
    }

    public function testGetCoinCategories()
    {
        $this->createApi()->getCoinCategories();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/categories',
          $request->getUri()->__toString();
        );
    }
}
