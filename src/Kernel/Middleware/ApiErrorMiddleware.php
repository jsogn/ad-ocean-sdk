<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use AdOceanSdk\Kernel\Exceptions\ApiResponseException;
use AdOceanSdk\Kernel\Exceptions\AuthException;
use AdOceanSdk\Kernel\Exceptions\RateLimitException;
use AdOceanSdk\RequestResponse;
use GuzzleHttp\Promise\PromiseInterface;

final class ApiErrorMiddleware implements MiddlewareInterface
{
    /**
     * @param list<int> $authErrorCodes
     * @param list<int> $rateLimitErrorCodes
     */
    public function __construct(
        private array $authErrorCodes = [40100, 40103, 40105],
        private array $rateLimitErrorCodes = [40000, 40110],
    ) {
    }

    public function setAuthErrorCodes(array $codes): self
    {
        $this->authErrorCodes = $codes;
        return $this;
    }

    public function setRateLimitErrorCodes(array $codes): self
    {
        $this->rateLimitErrorCodes = $codes;
        return $this;
    }

    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        return $next($context)->then(function (RequestResponse $response): RequestResponse {
            $code = $response->getCode();
            if ($code === 0) {
                return $response;
            }

            if (in_array($code, $this->authErrorCodes, true)) {
                throw new AuthException($response);
            }

            if (in_array($code, $this->rateLimitErrorCodes, true)) {
                throw new RateLimitException($response);
            }

            throw new ApiResponseException($response);
        });
    }
}
