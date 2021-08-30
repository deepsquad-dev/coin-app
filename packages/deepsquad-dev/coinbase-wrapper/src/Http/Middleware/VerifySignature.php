<?php

namespace DeepsquadDev\CoinbaseWrapper\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DeepsquadDev\CoinbaseWrapper\Exceptions\WebhookException;

class VerifySignature
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $signature = $request->header('X-CCWebhook-Signature');

        if (!$signature) {
            throw WebhookException::missingSignature();
        }

        if (! $this->isValid($signature, $request->getContent())) {
            throw WebhookException::invalidSignature($signature);
        }
        
        return $next($request);
    }

    protected function isValid(string $signature, string $payload): bool
    {
        $secret = config('coinbase.webhookSecret');

        if (empty($secret)) {
            throw WebhookException::sharedSecretNotSet();
        }

        $computedSignature = hash_hmac('sha256', $payload, $secret);

        return hash_hmac($signature, $computerSignature);
    }
}
