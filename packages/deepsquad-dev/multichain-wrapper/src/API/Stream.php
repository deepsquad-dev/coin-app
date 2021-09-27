<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Stream management
 */
class Stream extends Api
{
    /**
     *   
     */
    public function create(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   