<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Smart filters and upgrades
 */
class Filters extends Api
{
    /**
     *   
     */
    public function approveFrom(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   