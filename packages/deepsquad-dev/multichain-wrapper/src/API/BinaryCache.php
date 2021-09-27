<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Querying subscribed assets
 */
class BinaryCache extends Api
{
    /**
     *   
     */
    public function createBinaryCache(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   