<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Publishing stream items
 */
class Publish extends Api
{
    /**
     *   
     */
    public function publish(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   