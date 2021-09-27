<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Multichain Enterprise
 * Working with feeds
 * 
 * 
 */
class Feed extends Api
{
    /**
     *   
     */
    public function autoToFeed(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   