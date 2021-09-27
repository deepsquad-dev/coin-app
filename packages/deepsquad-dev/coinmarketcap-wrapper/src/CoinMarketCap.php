<?php

namespace DeepsquadDev\CoinmarketcapWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;

class CoinMarketCap
{
    protected $apiKey;
    protected $version;
    protected $httpClient;
    protected $uri;
    protected $debug=false;
    protected $verify=false;

    public function __construct()
    {
        $this->apiKey = config('coinmarketcap.apiKey');
        $this->version = config('coinmarketcap.version');
        $this->uri = config('coinmarketcap.apiKey');
        $this->httpClient = new Client([
            'base_uri' => $this->uri
        ]);
    }

    public function _call(string $method, array $params, $verb = 'GET')
    {
        $headers = [
            'X-CMC_PRO_API_KEY' => $this->apiKey
        ];

        $url = '/' . $this->verion . '/' . $method.'?'.http_build_query($params);

        try {
            $request = $this->http_client->request([
                'headers' => $headers,
                'debug' => $this->debug,
                'verify' => $this->verify,        
            ]);

            return json_decode($request->getBody(), true);
        } catch(ClientException $e) {
            return json_decode($e->getResponse()->getBody(), true);
        } catch(ConnectException $e) {
            return json_decode($e->getResponse()->getBody(), true);
        }
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function setVerify($verify)
    {
        $this->verify = $verify;
    }

    public function getVerify()
    {
        return $this->verify;
    }

    // Cryptocurrency
    // /v1/cryptocurrency/map - CoinMarketCap ID map
    public function cryptocurrencyMap(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/map', $params);
    }

    // /v1/cryptocurrency/info - Metadata
    public function cryptocurrencyInfo(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/info', $params);
    }

    // /v1/cryptocurrency/listings/latest - Latest listings
    public function cryptocurrencyLatestList(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/listings/latest', $params);
    }

    // /v1/cryptocurrency/listings/historical - Historical listings
    public function cryptocurrencyHistoricList(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/listings/historical', $params);
    }

    // /v1/cryptocurrency/quotes/latest - Latest quotes
    public function cryptocurrencyLatestQuotes(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/quotes/latest', $params);
    }

    // /v1/cryptocurrency/quotes/historical - Historical quotes
    public function cryptocurrencyHistoricQuotes(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/quotes/historical', $params);
    }

    // /v1/cryptocurrency/market-pairs/latest - Latest market pairs
    public function cryptocurrencyLatestMarketPairs(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/market-pairs/latest', $params);
    }

    // /v1/cryptocurrency/ohlcv/latest - Latest OHLCV
    public function cryptocurrencyLatestOlhcv(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/ohlcv/latest', $params);
    }

    // /v1/cryptocurrency/ohlcv/historical - Historical OHLCV
    public function cryptocurrencyHistoricOlhcv(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/ohlcv/historical', $params);
    }

    // /v1/cryptocurrency/price-performance-stats/latest - Price performance Stats
    public function cryptocurrencyLatestPricePerformanceStats(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/price-performance-stats/latest', $params);
    }

    // /v1/cryptocurrency/categories - Categories
    public function cryptocurrencyCategories(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/categories', $params);
    }

    // /v1/cryptocurrency/category - Category
    public function cryptocurrencyCategory(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/category', $params);
    }

    // /v1/cryptocurrency/airdrops - Airdrops
    public function cryptocurrencyAirdrops(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/airdrops', $params);
    }

    // /v1/cryptocurrency/airdrop - Airdrop
    public function cryptocurrencyAirdrop(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/airdrop', $params);
    }

    // /v1/cryptocurrency/trending/latest - Trending Latest
    public function cryptocurrencyLatestTrending(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/trending/latest', $params);
    }

    // /v1/cryptocurrency/trending/most-visited - Trending Most Visited
    public function cryptocurrencyTrendingMostVisited(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/trending/most-visited', $params);
    }

    // /v1/cryptocurrency/trending/gainers-losers - Trending Gainers & Losers
    public function cryptocurrencyTrendingGainersLosers(array $params =[])
    {
        return $this->_call('/v1/cryptocurrency/trending/gainers-losers', $params);
    }

    public function name(array $params =[])
    {
        return $this->_call('', $params);
    }

}