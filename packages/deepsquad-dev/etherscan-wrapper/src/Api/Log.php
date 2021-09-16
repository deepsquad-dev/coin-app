<?php

declare(strict_types=1);

namespace DeepsquadDev\EtherscanWrapper\Api;

use Exception;

/**
 *
 */
class Log extends Api
{
    /**
     *   
     */
    public function getLogs(int $formBlock, int $toBlock, String $address, 
        String $topic0, String $topic01Opr=null, String $topic1=null, 
        String $topic2, String $topic12Opr=null, String $topic3=null,
        String $topic23Opr=null, String $topic02Opr=null, 
        String $topic03Opr=null, String $topic13Opr=null)
    {
        $params['address']=$address;
        $params['fromblock'] =$formBlock; 
        $params['toblock'] =$toBlock;
        $params['topic0'] =$topic0;
        if (!empty($topic01Opr))
            $params['topic0_1_opr'] =$topic01Opr;
        if (!empty($topic1))    
            $params['topic1'] =$topic1;
        if (!empty($topic02Opr))
            $params['topic0_2_opr'] =$topic02Opr;
        if (!empty($topic2))    
            $params['topic2'] =$topic2;
        if (!empty($topic03Opr))
            $params['topic0_3_opr'] =$topic03Opr;
        if (!empty($topic3))    
            $params['topic3'] =$topic3;
        if (!empty($topic12Opr))
            $params['topic1_2_opr'] =$topic12Opr;
        if (!empty($topic23Opr))
            $params['topic2_3_opr'] =$topic23Opr;
        if (!empty($topic13Opr))
            $params['topic1_3_opr'] =$topic13Opr;
        
        return $this->get('logs', 'getLogs', $params);
    }
} 