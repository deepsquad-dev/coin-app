<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class QueryStream extends Api
{
    /**
     *   
     */
    public function getStreamItem(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   