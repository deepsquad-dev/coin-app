<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Advanced node control
 */
class Node extends Api
{
    /**
     *   
     */
    public function clearMemPool(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   