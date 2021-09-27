<?php

declare(strict_types=1);

namespace DeepsquadDev\MultichainWrapper\Api;

use Exception;

/**
 * Managing wallet unspent outputs
 * 
 */
class UnspentOutput extends Api
{
    /**
     *   
     */
    public function combineUnspent(String $value)
    {
        $params['key']=$value;
        
        return $this->get();
    }
}   