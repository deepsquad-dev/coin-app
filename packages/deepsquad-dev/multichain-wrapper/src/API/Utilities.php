<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class Utilities extends Api
{
    /**
     *   
     */
    public function getBlockChainParams(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   