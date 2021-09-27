<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * 
 */
class Library extends Api
{
    /**
     *   
     */
    public function addLibraryUpdate(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   