# Laravel package to query the Blockcypher API v1

RESTful API endpoint pattern: 

```
https://api.blockcypher.com/$API_VERSION/$COIN/$CHAIN/
```

For example: 
```
https://api.blockcypher.com/v1/btc/main/
```
Rate limites on free tier: 
- 3 requests / second and 200 requests / hour
- Webhooks and websockets <= 200 requests  per hour
- Up to 200 webhooks stored remotely 
- Confidence lookups 15 request / hour

Check usage and limits: 
```
https://api.blockcypher.com/v1/tokens/$TOKEN
```

Check
```
X-Ratelimit-Remaining (HTTP header of regular API call) 
```
## Batching

1 to 100 objects returned within a call by specifying several identifiers. A JSON array is returned contianing the objects. 

## Stable tests
Use bloackcypher test chain: 
```
https://api.blockcypher.com/v1/bcy/test/
```

### Faucets: 

Call faucet endpoint with a valid address to create and propogate a new transaction

## Blockchain API

```
$ curl -X GET "https://api.blockcypher.com/v1/btc/main"
{
  "name": "BTC.main",
  "height": 698258,
  "hash": "0000000000000000000d26fd0cd31c8d937b64e70a483953ded5c1b1bce84309",
  "time": "2021-08-30T10:37:31.97935315Z",
  "latest_url": "https://api.blockcypher.com/v1/btc/main/blocks/0000000000000000000d26fd0cd31c8d937b64e70a483953ded5c1b1bce84309",
  "previous_hash": "0000000000000000000e29dc94e5052b6b306f5aa954a310b67cf546fa2e48ee",
  "previous_url": "https://api.blockcypher.com/v1/btc/main/blocks/0000000000000000000e29dc94e5052b6b306f5aa954a310b67cf546fa2e48ee",
  "peer_count": 783,
  "unconfirmed_count": 5173,
  "high_fee_per_kb": 13389,
  "medium_fee_per_kb": 6330,
  "low_fee_per_kb": 2519,
  "last_fork_height": 694157,
  "last_fork_hash": "00000000000000000006e24bdc5c1875fa40909ace270fb2b8756ac652ede82d"
}
```

## Address API

## Wallet API

## Transaction API

## Confidence Factor

## Metadata API

## Asset API

## Address Forwarding 

## Events and Hooks

## Updates