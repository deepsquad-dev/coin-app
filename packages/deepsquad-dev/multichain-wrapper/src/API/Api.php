<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * 
 */
class Api
{
    /**
     * 
     */
    public function __construct()
    {

    }
    
    /**
     *   
     */
    public function name(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   