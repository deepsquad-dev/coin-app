<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Events;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class EventsTest extends ApiTestCase
{
    private function createApi(): Events
    {
        return new Events(new CoinGecko($this->getMockClient()));
    }

    public function testgGetEvents()
    {
        $this->createApi()->getEvents();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/events',
          $request->getUri()->__toString();
        );
    }

    public function testGetEventsCountries()
    {
        $this->createApi()->getEventsCountries();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/events/countries',
          $request->getUri()->__toString();
        );
    }

    public function testGetEventTypes(): array
    {
        $this->createApi()->getEventTypes();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/events/types',
          $request->getUri()->__toString();
        );
    }
}
