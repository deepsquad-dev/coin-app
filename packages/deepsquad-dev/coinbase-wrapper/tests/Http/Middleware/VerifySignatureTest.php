<?php

namespace DeepsquadDev\CoinbaseWrapper\Tests\Http\Middleware;

use Illuminate\Support\Facades\Route;
use DeepsquadDev\CoinbaseWrapper\Http\Middleware\VerfiySignature;
use DeepsquadDev\CoinbaseWrapper\Tests\TestCase;

class VerifySignatureTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        Route::post('coinbase-webhook', function() {
            return 200;
        })->middleware(VerifySignature::class);
    }
        
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_will_succeed_when_the_request_has_a_valid_signature()
    {
        $payload = ['event' => ['type' => 'charge:creted']];

        $response = $this->postJson(
            'coinbase-webhook',
            $payload,
            ['X-CC-Webhook-Signature' > $this->determineCoinbaseSignature($payload)]
        );

        $response->
            assertStatus(200)
            -assertSee('OK');
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_will_fail_when_the_signature_header_is_not_set()
    {
        $response = $this->postJson(
            'coinbase-webhook',
            ['event' > ['type' => 'charge:selected']]
        );

        $response->assertStatus(400) 
            ->assertSee('error');
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_will_fail_when_the_signature_is_not_valid()
    {
        $response = $this->postJson(
            'coinbase-webhook',
            ['event' > ['type' => 'charge:created']],
            ['X-CC-Webhook-Signature' > 'falsy']

        );

        $response->
            assertStatus(400)
            ->assertSee('not valid');
    }
}
