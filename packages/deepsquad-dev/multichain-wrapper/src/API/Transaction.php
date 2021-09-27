<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * 
 */
class Transaction extends Api
{
    /**
     *   
     */
    public function name(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   