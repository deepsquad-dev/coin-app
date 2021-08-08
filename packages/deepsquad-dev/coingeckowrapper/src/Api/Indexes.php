<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Indexes extends Api
{
    public function getIndexes(array $params = []): array
    {
        return $this->get('/indexes', $params);
    }

    public function getIndexesMarketId(string $marketId, string $id): array
    {
        return $this->get('/indexes' . $marketId . '/' . $id);
    }

    public function getIndexesList(): array
    {
        return $this->get('/indexes/list');
    }
}
