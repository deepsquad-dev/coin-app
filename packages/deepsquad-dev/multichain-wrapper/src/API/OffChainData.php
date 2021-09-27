<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Multichain Enterprise
 * Controlling off-chain data
 * 
 * 
 */
class OffChainData extends Api
{
    /**
     *   
     */
    public function purgePublishedItems(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   