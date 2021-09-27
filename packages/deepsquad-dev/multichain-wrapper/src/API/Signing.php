<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Message signing and verification
 */
class Signing extends Api
{
    /**
     *   
     */
    public function signMessage(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }

    /**
     *   
     */
    public function verifyMessage(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }

}   