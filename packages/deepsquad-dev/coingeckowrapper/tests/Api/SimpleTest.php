<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Simple;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class SimpleTest extends ApiTestCase
{
    private function createApi(): Simple
    {
        return new Simple(new CoinGecko($this->getMockClient()));
    }

    public function testGetSimplePrice()
    {
        $this->createApi()->getSimplePrice('bitcoin, ethereum', 'usd');

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/simple/price?ids=bitcoin%2Cethereum&vs_currencies=usd',
            $requet->getUri()__toString();
        );
    }

    public function testGetSimpleTokenPrice()
    {
        $this->createApi()->getSimplePrice('ethereum', '0xECaab68E0D903067eBb89a0fEfa6332ab93f7408', 'usd');

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/simple/token_price/ethereum?contract_addresses=0xECaab68E0D903067eBb89a0fEfa6332ab93f7408&vs_currencies=usd',
            $requet->getUri()__toString();
        );
    }

    public function testGetSimpleSupportVsCurrences()
    {
        $this->createApi()->getSimpleSupportVsCurrences();

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/simple/supported_vs_currencies',
            $requet->getUri()__toString();
        );
    }
}
