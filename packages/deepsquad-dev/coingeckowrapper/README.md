# CoinGecko Wrapper

## Requirements

- PHP >= 7.3
- ext-json
- guzzlehttp

## Installation

``` $ composer require deepsquad-dev/coingeckowrapper ```   

## Usage

``` use Deepsquaddev\Coingeckowrapper\CoinGecko; ```

```
$client = new CoinGecko();
$data = $client->ping();
```
Get the last Response

```
$client = new CoinGecko();
$data = $client->coins()->getList();
$response = $client->getLastResponse();
$headers = $response->getHeaders();
```

##  Methods

### Ping

### Asset

### Coins

### Contract

### Derivatives

### Events

### ExchangeRates

### Exchanges

### Finance

### Globals

### Indexes

### PublicTreasury

### Simple

### StatusUpdates       

### Trending
