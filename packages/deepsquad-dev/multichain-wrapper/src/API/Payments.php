<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class Payment extends Api
{
    /**
     *   
     */
    public function send(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   