<?php

declare(strict_types=1);

namespace DeepsquadDev\EtherscanWrapper\Api;

use Exception;

/**
 *
 */
class Contract extends Api
{
    /**
     *   
     */
    public function getContractABIForVerifiedContractSourceCodes(String $address)
    {
        $params['address']=$address;
        
        return $this->get('contract', 'getabi', $params);
    }

    /**
     *   
     */
    public function getContractSourceCodeForVerifiedContractSourceCodes(String $address)
    {
        $params['address']=$address;
        
        return $this->get('contract', 'getsourcecode', $params);
    }

}   