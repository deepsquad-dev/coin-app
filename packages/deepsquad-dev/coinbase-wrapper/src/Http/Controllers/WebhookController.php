<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DeepsquadDev\CoinbaseWrapper\Http\Middleware\VerifySignature;

class WebhookController extends Controller
{
    public function __construct()
    {
        $this->middleware(VerifySignature::class);
    }

    public function __invoke(Request $request)
    {
        $payload = $request->input();

        $model = config('coinbase.webhookModel');

        $coinbaseWebook = $model::create([
            'type' => $payload['event']['type'] ?? '',
            'payload' => $payload,
        ]);

        try {
            $coinbaseWebhook->process();
        } catch (\Exception $e) {
            $coinbaseWebhook->saveException();

            throw $e;
        }
    }
}
