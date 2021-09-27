<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Peer-to-Peer connections
 */
class P2P extends Api
{
    /**
     *   
     */
    public function addNode(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   