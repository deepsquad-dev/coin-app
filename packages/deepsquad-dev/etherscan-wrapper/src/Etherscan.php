<?php

namespace DeepsquadDev\EtherscanWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class Etherscan 
{
    const BASE_URI = 'https://api.etherscan.io/api';

    private $apiKey;

    private $requester;

    public function __construct(?Client $client = null)
    {
        $this->requester = $client ?: new Client(['base_uri' => self::BASE_URI]);
    }
  
    public function getHttpClient(): client
    {
        return $this->requester;
    }

    public function account(): Account
    {
        return new Account($this);
    }

    public function block(): Block
    {
        return new Block($this);
    }

    public function contract(): Contact
    {
        return new Contact($this);
    }

    public function log(): Log
    {
        return new Log($this);
    }

    public function transaction(): Transaction
    {
        return new Transaction($this);
    }
}
