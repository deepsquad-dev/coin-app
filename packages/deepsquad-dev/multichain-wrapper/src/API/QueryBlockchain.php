<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Querying subscribed assets
 */
class QueryBlockchain extends Api
{
    /**
     *   
     */
    public function getBlock(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   