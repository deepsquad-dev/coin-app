<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class StatusUpdates extends Api
{
    public function getStatusUpdates(array $params = []): array
    {
        return $this->get('/status_updates', $params);
    }
}
