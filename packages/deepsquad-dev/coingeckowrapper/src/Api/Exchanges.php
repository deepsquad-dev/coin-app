<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Exchanges extends Api
{
    public function getExchanges(array $params = []): array
    {
        return $this->get('/exchanges');
    }

    public function getExchangesList(): array
    {
        return $this->get('/exchanges/list');
    }

    public function getExchangesVolume(string $id): array
    {
        return $this->get('/exchanges/' . $id);
    }

    public function getExchangesTickers(string $id, array $params = []): array
    {
        return $this->get('/exchanges/' . $id . '/tickers', $params);
    }

    // Exchange id
    public function getExchangeStatusUpdate(string $id, array $params = []): array
    {
        return $this->get('/exchanges/'  . $id . '/status_updates', $params);
    }

    // Exchange id
    public function getExchangeVolumeChart(string $id, string $days): array
    {
        $params['days'] = $days;

        return $this->get('/exchanges/'  . $id . 'volume_chart', $params);
    }
}
