<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Querying subscribed assets
 */
class QueryAsset extends Api
{
    /**
     *   
     */
    public function getAssetTransaction(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   