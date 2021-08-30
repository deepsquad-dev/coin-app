<?php 

namespace DeepsquadDev\CoinbaseWrapper\Exceptions;

use Exception;
use Illuminate\Http\Request;
use DeepsquadDev\CoinbaseWrapper\Models\CoinbaseWebhook;

class WebhookException extends Exception 
{
    public static function missingSignature()
    {
        return new static('The request did not contain a header named `X-CC-Webhook-Signature`.');
    }

    public static function invalidSignature($signature)
    {
        return new static('The signature `{$signature}` found in the header named `X-CC-Webhook-Signature` is not valid. Ensure  the config variable - webhookSecret - is set. If your config is cached clearing the cache may resolve teh isuse.');
    }

    public static function sharedSecretNotSet()
    {
        return new static('Your Coinbase shared secret has not been set. Check you dashboard and ensure the value is set.');
    }

    public static function jobClassDoesNotExist(string $job, CoinbaseWebhook $webhook)
    {
        return new static('Could not process webhook id `{$webhook->id}` of type `{$webhook->type}` because a job named `{$job}`does not exist ');
    }

    public static function missingType()
    {
        return new static('The webhook did not contain a type. You must add a type for your webhook call to be valid.');
    }

    public function render($request)
    {
        return response(['error' => $this->getMessage()], 400);
    }
}