<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Ping extends Api
{
    public function ping(): array
    {
        return $this->get('/ping');
    }
}
