<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Message;

use DeepsquadDev\Coingeckowrapper\Exception\TransformResponseException;
use Psr\Http\Message\ResponseInterface;
use Exception;

class ResponseTransformer
{
    public function transform(ResponseInterface $response): array
    {
        $body = (string) $response->getBody();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }

            throw new TransformResponseException(
                'Error creating array from response . JSON_ERROR: '
                . json_last_error() . ' --' . $body . '---'
            );
        }

        throw new TransformResponseException(
            'Error creating array from response. Content-Type is not application/json'
        );
    }
}
