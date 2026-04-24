<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use AdOceanSdk\Kernel\Exceptions\NetworkException;
use AdOceanSdk\RequestResponse;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

final class LoggingMiddleware implements MiddlewareInterface
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        $logContext = [
            'method' => $context->method,
            'uri'    => $context->uri,
            'api'    => $context->api::class,
        ];

        $this->logger->debug('AdOceanSdk request sending', $logContext);

        return $next($context)->then(
            function (RequestResponse $response) use ($logContext): RequestResponse {
                $this->logger->debug('AdOceanSdk request done', $logContext + [
                    'code'       => $response->getCode(),
                    'request_id' => $response->getRequestId(),
                ]);
                return $response;
            },
            function (\Throwable $e) use ($logContext): never {
                if ($e instanceof NetworkException) {
                    $this->logger->error('AdOceanSdk request failed', $logContext + ['error' => $e->getMessage()]);
                }
                throw $e;
            },
        );
    }
}
