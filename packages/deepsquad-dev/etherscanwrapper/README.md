# Etherscan API PHP Wrapper

## Account

Get ether balance for a single account

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=balance&address=0xddbd2b932c763ba5b1b7ae3b362eac3e8d40121a&tag=latest&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

{"status":"1","message":"OK","result":"40891626854930000000000"}

Get Ether Balance for multiple Addresses in a single call

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=balancemulti&address=0xddbd2b932c763ba5b1b7ae3b362eac3e8d40121a,0x63a9975ba31b0b9626b34300f7f627147df1f526,0x198ef1ec325a96cc354c7266a038be8b5c558f67&tag=latest&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

{"status":"1","message":"OK","result":[{"account":"0xddbd2b932c763ba5b1b7ae3b362eac3e8d40121a","balance":"40891626854930000000000"},{"account":"0x63a9975ba31b0b9626b34300f7f627147df1f526","balance":"332567136222827062478"},{"account":"0x198ef1ec325a96cc354c7266a038be8b5c558f67","balance":"0"}]}

Get a list of 'Normal' Transactions By Address

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=txlist&address=0xddbd2b932c763ba5b1b7ae3b362eac3e8d40121a&startblock=0&endblock=99999999&sort=asc&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

https://api.etherscan.io/api?module=account&action=txlist&address=0xddbd2b932c763ba5b1b7ae3b362eac3e8d40121a&startblock=0&endblock=99999999&page=1&offset=10&sort=asc&apikey=

Get a list of 'Internal' Transactions by Address

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=txlistinternal&address=0x2c1ba59d6f58433fb1eaee7d20b26ed83bda51a3&startblock=0&endblock=2702578&sort=asc&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

https://api.etherscan.io/api?module=account&action=txlistinternal&address=0x2c1ba59d6f58433fb1eaee7d20b26ed83bda51a3&startblock=0&endblock=2702578&page=1&offset=10&sort=asc&apikey=

Get "Internal Transactions" by Transaction Hash

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=txlistinternal&txhash=0x40eb908387324f2b575b4879cd9d7188f69c8fc9d87c901b9e2daaea4b442170&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

Get "Internal Transactions" by Block Range

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=txlistinternal&startblock=0&endblock=2702578&page=1&offset=10&sort=asc&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

Get a list of "ERC20 - Token Transfer Events" by Address

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=tokentx&address=0x4e83362442b8d1bec281594cea3050c8eb01311c&startblock=0&endblock=999999999&sort=asc&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

https://api.etherscan.io/api?module=account&action=tokentx&contractaddress=0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2&page=1&offset=100&sort=asc&apikey=

https://api.etherscan.io/api?module=account&action=tokentx&contractaddress=0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2&address=0x4e83362442b8d1bec281594cea3050c8eb01311c&page=1&offset=100&sort=asc&apikey=

Get a list of "ERC721 - Token Transfer Events" by Address

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=tokennfttx&address=0x6975be450864c02b4613023c2152ee0743572325&startblock=0&endblock=999999999&sort=asc&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

https://api.etherscan.io/api?module=account&action=tokennfttx&contractaddress=0x06012c8cf97bead5deae237070f9587f8e7a266d&page=1&offset=100&sort=asc&apikey=

https://api.etherscan.io/api?module=account&action=tokennfttx&contractaddress=0x06012c8cf97bead5deae237070f9587f8e7a266d&address=0x6975be450864c02b4613023c2152ee0743572325&page=1&offset=100&sort=asc&apikey=

Get list of Blocks Mined by Address

curl -X 'GET' 'https://api.etherscan.io/api?module=account&action=getminedblocks&address=0x9dd134d14d1e65f84b706d6f205cd5b1cd03a46b&blocktype=blocks&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH'

https://api.etherscan.io/api?module=account&action=getminedblocks&address=0x9dd134d14d1e65f84b706d6f205cd5b1cd03a46b&blocktype=blocks&page=1&offset=10&apikey=

**************************************************
## Contracts

Get Contract ABI for Verified Contract Source Codes

curl -X 'GET' 'https://api.etherscan.io/api?module=contract&action=getabi&address=0xBB9bc244D798123fDe783fCc1C72d3Bb8C189413&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH' -H 'accept: application/json'

Get Contract Source Code for Verified Contract Source Codes

curl -X 'GET' 'https://api.etherscan.io/api?module=contract&action=getsourcecode&address=0xBB9bc244D798123fDe783fCc1C72d3Bb8C189413&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH' -H 'accept: application/json'

HarmonyOne

0x799a4202c12ca952cb311598a024c80ed371a41e

curl -X 'GET' 'https://api.etherscan.io/api?module=contract&action=getsourcecode&address=0x799a4202c12ca952cb311598a024c80ed371a41e&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH' -H 'accept: application/json'


Verify Proxy Contract (beta)

curl -d "address=0xcbdcd3815b5f975e1a2c944a9b2cd1c985a1cb7f" "https://api.etherscan.io/api?module=contract&action=verifyproxycontract&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH"

curl -d "address=0x799a4202c12ca952cb311598a024c80ed371a41e" "https://api.etherscan.io/api?module=contract&action=verifyproxycontract&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH"

{"status":"1","message":"OK","result":"fqt1hv6reidbwqp8g2imqm7gc7ey3jhn1bbhxdiguutvkhjkft"}

With expected expected implementation

curl -d "address=0xbc46363a7669f6e12353fa95bb067aead3675c29&expectedimplementation=0xe45a5176bc0f2c1198e2451c4e4501d4ed9b65a6" "https://api.etherscan.io/api?module=contract&action=verifyproxycontract&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH"

Checking Proxy Contract verification submission status, cURL example:

curl -X GET "https://api.etherscan.io/api?module=contract&action=checkproxyverification&guid=gwgrrnfy56zf6vc1fljuejwg6pelnc5yns6fg6y2i6zfpgzquz&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"0","message":"NOTOK","result":"The proxy contract at 0xcbdcd3815b5f975e1a2c944a9b2cd1c985a1cb7f does not seem to be verified. Please verify and publish the contract source before proceeding with this proxy verification."}

curl -X GET "https://api.etherscan.io/api?module=contract&action=checkproxyverification&guid=gwgrrnfy56zf6vc1fljuejwg6pelnc5yns6fg6y2i6zfpgzquz&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"0","message":"NOTOK","result":"This contract does not look like it contains any delegatecall opcode sequence."}

*************************************************
## Transactions

Check Contract Execution Status (if there was an error during contract execution)

curl -X GET "https://api.etherscan.io/api?module=transaction&action=getstatus&txhash=0x15f8e5ea1079d9a0bb04a4c58ae5fe7654b5b2b4463375ff7ffb490aa0032f3a&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":{"isError":"1","errDescription":"Bad jump destination"}}

curl -X GET "https://api.etherscan.io/api?module=transaction&action=getstatus&txhash=0x2e6f0f7694f2bc24a65f569b126a9140e050655e23bab02849fe2def8a06a7ca&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":{"isError":"0","errDescription":""}}

Check Transaction Receipt Status (Only applicable for Post Byzantium fork transactions)

curl -X GET "https://api.etherscan.io/api?module=transaction&action=gettxreceiptstatus&txhash=0x513c1ba0bebf66436b5fed86ab668452b7805593c05073eb2d51d3a52f480a76&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":{"status":"1"}}

*************************************************

## Blocks

Get Block And Uncle Rewards by BlockNo

curl -X GET "https://api.etherscan.io/api?module=block&action=getblockreward&blockno=2165403&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":{"blockNumber":"2165403","timeStamp":"1472533979","blockMiner":"0x13a06d3dfe21e0db5c016c03ea7d2509f7f8d1e3","blockReward":"5314181600000000000","uncles":[{"miner":"0xbcdfc35b86bedf72f0cda046a3c16829a2ef41d1","unclePosition":"0","blockreward":"3750000000000000000"},{"miner":"0x0d0c9855c722ff0c78f21e43aa275a5b8ea60dce","unclePosition":"1","blockreward":"3750000000000000000"}],"uncleInclusionReward":"312500000000000000"}}

Get Estimated Block Countdown Time by BlockNo

curl -X GET "https://api.etherscan.io/api?module=block&action=getblockcountdown&blockno=999999999&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":{"CurrentBlock":"13032405","CountdownBlock":"999999999","RemainingBlock":"986967594","EstimateTimeInSec":"13027972255.8"}}


Get Block Number by Timestamp

curl -X 'GET' "https://api.etherscan.io/api?module=block&action=getblocknobytime&timestamp=1478638524&closest=before&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":"2591352"}

curl -X 'GET' "https://api.etherscan.io/api?module=block&action=getblocknobytime&timestamp=1578638524&closest=before&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

{"status":"1","message":"OK","result":"9251482"}

Get Daily Average Block Size
Get Daily Block Count and Rewards
Get Daily Block Rewards
Get Daily Average Block Time for A Block to be Included in the Ethereum Blockchain
Get Daily Uncle Block Count and Rewards

*************************************************
## Logs

Alternative to eth_logs


curl -X 'GET' "https://api.etherscan.io/api?module=logs&action=getLogs&fromBlock=379224&toBlock=latest&address=0x33990122638b9132ca29c723bdf037f1a891a70c&topic0=0xf63780e752c6a54a94fc52715dbc5518a3b4c3c2833d301a204226548a2a8545&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'

https://api.etherscan.io/api?module=logs&action=getLogs&fromBlock=379224&toBlock=400000&address=0x33990122638b9132ca29c723bdf037f1a891a70c&topic0=0xf63780e752c6a54a94fc52715dbc5518a3b4c3c2833d301a204226548a2a8545&topic0_1_opr=and&topic1=0x72657075746174696f6e00000000000000000000000000000000000000000000&apikey=WYPF6TYDN59AKPHJA8AAKWPJHFE8JDWEWH" -H 'accept: application/json'
