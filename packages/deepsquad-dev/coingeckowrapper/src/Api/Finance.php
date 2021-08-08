<?php

declare(strict_types=1);

namespace Deepsquaddev\Coingeckowrapper\Api;

use Exception;

class Finance extends Api
{
    public function getFinancePlatforms(array $params = []): array
    {
        return $this->get('/finance_platforms', $params);
    }

    public function getFinanceProducts(array $params = []): array
    {
        return $this->get('/finance_products', $params);
    }
}
