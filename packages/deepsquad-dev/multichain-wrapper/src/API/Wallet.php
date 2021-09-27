<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * + Advanced Wallet Control
 */
class Wallet extends Api
{
    /**
     *   
     */
    public function addMultisigAddress(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }



    /**
     *   
     */
    public function backupWallet(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }

}   