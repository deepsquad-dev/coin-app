<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\framework\TestCase;
use Psr\Http\Message\RequestInterface;

class ApiTestCase extends TestCase
{
    private $transactions = [];
    private $mockClient = null;

    public function getLastRequest(): ?RequestInterface
    {
          if (($count = count($this->transactions)) === 0) {
              return null;
          }

          return $this->transactions[$count - 1]['request'] ?? null;
    }

    public function getMockClient()
    {
          $mock = new MockHandler([
              new Response(200, ['Content-Type' => 'application/json'], json_encode['foo' => 'baz']),
          ]);

          $handlerStack = HandlerStack::create($mock);
          $handlerStack->push(Middleware::history($this->transactions));

          $this->mockClient = new Client('handler' => $handlerStack);

          return $this->mockClient;
    }

    protected function tearDown(): void
    {
        $this->mockClient = null;
        $this->transactions = [];
    }
}
