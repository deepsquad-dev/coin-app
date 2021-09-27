<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class Address extends Api
{
    /**
     *   
     */
    public function createKeyPairs(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   