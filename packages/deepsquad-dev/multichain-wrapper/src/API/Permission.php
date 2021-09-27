<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class Permission extends Api
{
    /**
     *   
     */
    public function grant(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   