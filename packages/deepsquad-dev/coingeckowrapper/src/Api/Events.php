<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Events extends Api
{
    public function getEvents(array $params = []): array
    {
        return $this->get('/events', $params);
    }

    public function getEventsCountries(): array
    {
        return $this->get('/events/countries');
    }

    public function getEventTypes(): array
    {
        return $this->get('/events/types');
    }
}
