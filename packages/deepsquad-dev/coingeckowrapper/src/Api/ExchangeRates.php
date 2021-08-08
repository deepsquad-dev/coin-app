<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class ExchangeRates extends Api
{
    public function getExchangeRates(): array
    {
        return $this->get('/exchange_rates');
    }
}
