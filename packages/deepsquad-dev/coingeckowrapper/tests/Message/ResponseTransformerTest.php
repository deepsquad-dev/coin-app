<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Message;

use DeepsquadDev\Coingeckowrapper\Exception\TransformResponseException;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ResponseTransformerTest extends TestCase
{
    public function testTransform()
    {
        $transformer = new ResponseTransformer();
        $data = ['foo' => 'bar'];
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode($data));

        $this->assertEquals($data, $transformer->transform($response));
    }

    public function testTransformEmptyBody()
    {
      $transformer = new ResponseTransformer();
      $data = [];
      $response = new Response(200, ['Content-Type' => 'application/json'], json_encode($data));

      $this->assertEquals($data, $transformer->transform($response));
    }

    public function testTransformThrowTransformResponseException()
    {
        $transformer = new ResponseTransformer();
        $response = new Response(200, ['Content-Type' => 'application/json'], '');

        $this->expectException(TransformerResponseException::class);

        $transformer->transform($response);
    }


    public function testTransformWithIncorrectContentType()
    {
        $transformer = new ResponseTransformer();
        $data = [];
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode($data));

        $this->expectException(TransformerResponseException::class);

        $this->assertEquals($data, $transformer->transform($response));
    }
}
