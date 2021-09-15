<?php

declare(strict_types=1);

namespace DeepsquadDev\EtherscanWrapper\Api;

use Exception;

/**
 * Tag = earliest, pending, latest
 */
class Account extends Api
{
    /**
     * 
     */
    public function getEtherBalanceForSingleAddress(String $address, String $tag)
    {
        $params['address']=$address;
        $params['tag']=$tag;

        return $this->get('account', 'balance', $params);
    }

    /**
     * 
     */
    public function getEtherBalanceForMultipleAddresses(Array $addresses, String $tag)
    {
        $params['address']=$address;
        $params['tag']=$tag;

        return $this->get('account', 'balancemulti', $params);
    }

    /**
     * 
     */
    public function getListOfNormalTransactionsByAddress(String $address, 
        int $startblock = 0, int $endblock = 99999999, int $page=1, int $offset=10,
        String $sort = 'asc')
    {
        $params['address']=$address;
        $params['startblock']=$startblock;
        $params['endblock']=$endblock;
        $params['page']=$page;
        $params['offset']=$offset;
        $params['sort']=$sort;

        return $this->get('account', 'txlist', $params);
    }

    /**
     * 
     */
    public function getListOfInternalTransactionsByAddress(String $address, 
        int $startblock = 0, int $endblock = 99999999, int $page=1, int $offset=10,
        String $sort = 'asc')
    {
        $params['address']=$address;
        $params['startblock']=$startblock;
        $params['endblock']=$endblock;
        $params['page']=$page;
        $params['offset']=$offset;
        $params['sort']=$sort;

        return $this->get('account', 'txlistinternal', $params);
    }

    /**
     * 
     */
    public function getInternalTransactionsByHash(String $txhash)
    {
        $params['txhash']=$txhash;

        return $this->get('account', 'txlistinternal', $params);
    }

    /**
     * Returns a maximum of 10000 records
     */
    public function getInternalTransactionsByBlockRange(
        int $startblock = 0, int $endblock = 99999999, int $page=1, int $offset=10,
        String $sort = 'asc')
    {
        $params['startblock']=$startblock;
        $params['endblock']=$endblock;
        $params['page']=$page;
        $params['offset']=$offset;
        $params['sort']=$sort;

        return $this->get('account', 'txlistinternal', $params);
    }

    /**
     * 
     */
    public function getListOfERC20TransferEventsByAddress(
        String $contractaddress, String $address,  int $page=1, 
        int $offset=100, String $sort = 'asc')
    {
        $params['contractaddress']=$contractaddress;
        $params['address']=$address;
        $params['page']=$page;
        $params['offset']=$offset;
        $params['sort']=$sort;

        return $this->get('account', 'tokentx', $params);
    }

    /**
     * 
     */
    public function getListOfERC721TransferEventsByAddress(
        String $contractaddress, String $address,  int $page=1, 
        int $offset=100, String $sort = 'asc')
    {
        $params['contractaddress']=$contractaddress;
        $params['address']=$address;
        $params['page']=$page;
        $params['offset']=$offset;
        $params['sort']=$sort;

        return $this->get('account', 'tokennfttx', $params);
    }

    /**
     * blocktype = blocks for canonical , uncles for uncle blocks only 
     */
    public function getListOfBlocksMinedByAddress(
        String $address, String $blocktype, int $page=1,    
        int $offset=10)
    {
        $params['address']=$contractaddress;
        $params['blocktype']=$address;
        $params['page']=$page;
        $params['offset']=$offset;

        return $this->get('account', 'getminedblocks', $params);
    }

    /**
     * 
     */
    public function getHistoricalEtherBalanceForSingleAddressByBlockNumber(
        String $address, int $blocknumber)
    {
        $params['address']=$address;
        $params['blockno']=$blocknumber;

        return $this->get('account', 'balance', $params);
    }
}