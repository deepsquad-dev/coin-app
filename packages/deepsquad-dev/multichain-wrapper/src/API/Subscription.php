<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Managing stream and asset subscription
 */
class Subscription extends Api
{
    /**
     *   
     */
    public function subscribe(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   