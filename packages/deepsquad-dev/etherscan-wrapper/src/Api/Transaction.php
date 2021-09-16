<?php

declare(strict_types=1);

namespace DeepsquadDev\EtherscanWrapper\Api;

use Exception;

/**
 *
 */
class Transaction extends Api
{
    /**
     *   
     */
    public function checkContractExecutionStatus(String $txhash)
    {
        $params['txhash']=$txhash;
        
        return $this->get('transaction', 'getstatus', $params);
    }

    /**
     *   Only applicable to post Byzantium Fpk transactions
     */
    public function checkTransactionReceiptStatus(String $txhash)
    {
        $params['txhash']=$txhash;
        
        return $this->get('transaction', 'gettxreceiptstatus', $params);
    }

}    