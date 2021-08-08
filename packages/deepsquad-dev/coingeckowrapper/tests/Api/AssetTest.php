<?php

declare(strict_types=1);

namespace Deepsquaddev\Coingeckowrapper\Tests\Api;

use Deepsquaddev\Coingeckowrapper\Api\Asset;
use Deepsquaddev\Coingeckowrapper\CoinGecko;

class AssetTest extends ApiTestCase
{
    private function createApi(): Asset
    {
        return new Asset(new CoinGecko($this->getMockClient()));
    }
}
