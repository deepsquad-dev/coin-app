<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Globals extends Api
{
    public function getGlobals(): array
    {
        return $this->get('/global');
    }

    public function getGlobalsDEFI(): array
    {
        return $this->get('/global/decentralized_finance_defi');
    }
}
