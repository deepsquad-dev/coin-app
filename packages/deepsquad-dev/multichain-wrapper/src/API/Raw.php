<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Working with Raw transactions
 */
class Raw extends Api
{
    /**
     *   
     */
    public function appendRawChange(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   