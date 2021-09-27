<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Atomic Exchaneg Transactions
 */
class Atomic extends Api
{
    /**
     *   
     */
    public function appendRawExchange(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   