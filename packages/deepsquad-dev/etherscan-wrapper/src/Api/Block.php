<?php

declare(strict_types=1);

namespace DeepsquadDev\EtherscanWrapper\Api;

use Exception;

/**
 *
 */
class Block extends Api
{
    /**
     *   
     */
    public function getBlockAndUncleRewardsByBlockNumber(int $blockno)
    {
        $params['blockno']=$blockno;
        
        return $this->get('block', 'getblockcountdown', $params);
    }

    /**
     * $timstamp = Unix timestamp in seconds
     * $closest = before | after  
     * 
     */
    public function getBlockNumberByTimestamp(int $timestamp, String $closest)
    {
        $params['timestamp']=$timestamp;
        $params['closest']=$closest;

        return $this->get('block', 'getblocknobytime', $params);
    }

    /**
     * PRO
     */
    public function getDailyAverageBlockSize(String $startdate, String $enddate, String $sort='asc')
    {
        $params['startdate']=$startdate;
        $params['enddate']=$endate;
        $params['sort']=$sort;

        return $this->get('stats', 'dailyavgblocksize', $params);
    }

    /**
     * PRO
     */
    public function getDailyBlockCountRewards(String $startdate, String $enddate, String $sort='asc')
    {
        $params['startdate']=$startdate;
        $params['enddate']=$endate;
        $params['sort']=$sort;

        return $this->get('stats', 'dailyblkcount', $params);
    }

    /**
     * PRO
     */
    public function getDailyBlockRewards(String $startdate, String $enddate, String $sort='asc')
    {
        $params['startdate']=$startdate;
        $params['enddate']=$endate;
        $params['sort']=$sort;

        return $this->get('stats', 'dailyblockrewards', $params);
    }

    /**
     * PRO
     */
    public function getDailyAverageTimeForBlockInclusionInChain(String $startdate, String $enddate, String $sort='asc')
    {
        $params['startdate']=$startdate;
        $params['enddate']=$endate;
        $params['sort']=$sort;

        return $this->get('stats', 'dailyvgblocktime', $params);
    }

    /**
     * PRO
     */
    public function getDailyUncleBlockCountRewards(String $startdate, String $enddate, String $sort='asc')
    {
        $params['startdate']=$startdate;
        $params['enddate']=$endate;
        $params['sort']=$sort;

        return $this->get('stats', 'dailyuncleblkcount', $params);
    }

}