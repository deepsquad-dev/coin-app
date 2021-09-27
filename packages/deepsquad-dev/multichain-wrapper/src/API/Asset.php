<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 *
 */
class Asset extends Api
{
    /**
     *   
     */
    public function getAssetInfo(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   