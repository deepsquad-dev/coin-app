<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Exchanges;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class ExchangesTest extends ApiTestCase
{
    private function createApi(): Exchanges
    {
        return new Exchanges(new CoinGecko($this->getMockClient()));
    }

    public function testGetExchanges()
    {
        $this->createApi()->getExchanges();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/exchanges',
          $request->getUri()->__toString();
        );
    }

    public function testGetExchangesList()
    {
        $this->createApi()->getExchangesList();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/exchanges/list',
          $request->getUri()->__toString();
        );
    }

    public function testGetExchangesVolume()
    {
        $this->createApi()->getExchangesVolume('binance');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/exchanges/binance',
          $request->getUri()->__toString();
        );
    }

    public function testGetExchangesTickers()
    {
        $this->createApi()->getExchangesTickers('binance', ['coin_ids' => 'ethereum, bitcoin']);

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/exchanges/binance/tickers?coin_ids=ethereum%2Cbitcoin',
          $request->getUri()->__toString();
        );
    }

    // Exchange id
    public function testGetExchangeStatusUpdate()
    {
        $this->createApi()->getExchangesStatusUpdate('binance');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/binance/exchanges/status_updates',
          $request->getUri()->__toString();
        );
    }

    // Exchange id
    public function testGetExchangeVolumeChart()
    {
        $this->createApi()->getExchangesStatusUpdate('binance', '1');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/binance/exchanges/volume_chart?days=1',
          $request->getUri()->__toString();
        );
    }
}
