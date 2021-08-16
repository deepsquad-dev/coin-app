<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class PublicTreasury extends Api
{
    public function getPublicTreasury(string $coinId): array
    {
        return $this->get('/companies/public_treasury/' . $coinId);
    }
}
