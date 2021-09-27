<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class Query extends Api
{
    /**
     *   
     */
    public function getAddressBalances(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   