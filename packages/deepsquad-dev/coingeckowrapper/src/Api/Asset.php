<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Asset extends Api
{
    public function getAssetPlatforms()
    {
        return $this->get('/asset_platforms');
    }
}
